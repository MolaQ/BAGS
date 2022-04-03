<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasFactory;

    protected $fillable = [
        'stage_id',
        'team_id',
        'points',
    ];

    public function team()
    {
        return $this->belongsTo('App\Models\Team');
    }
    public function stage()
    {
        return $this->belongsTo('App\Models\Stage');
    }


}
