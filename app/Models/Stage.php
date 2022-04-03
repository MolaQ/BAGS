<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stage extends Model
{
    use HasFactory;

    protected $fillable = [
        'category',
        'title',
        'description',
        'maxpoints',
        'stagestate',
    ];

    public function results()
    {
    return $this->hasMany('App\Models\Result');
    }

}
