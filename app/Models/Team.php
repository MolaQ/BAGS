<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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

}
