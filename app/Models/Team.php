<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Result;

class Team extends Model
{
    use HasFactory;

    protected $fillable = [
        'teammembers',
        'classname',
        'group',
    ];
    protected $hidden = [
        'created_at',
        'updated_at',
    ];
    public function results()
{
    return $this->hasMany('App\Models\Result');
}

}
