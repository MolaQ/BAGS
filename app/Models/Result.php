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

    public function color($percent)
    {
        if($percent<0.2) return 'danger';
        if($percent<=0.4) return 'warning';
        if($percent<=0.75) return 'info';
        if($percent<=1) return 'primary';
    }

    public function promoteArrow($place)
    {
       if($place>0) return 'up';
       if($place==0) return 'left';
       if($place<0) return 'down';

    }
    public function promoteColor($place)
    {
       if($place>0) return 'success';
       if($place==0) return 'warning';
       if($place<0) return 'danger';

    }
    public function promoteLocate($place)
    {
       if($place>0) return $place;
       if($place==0) return '';
       if($place<0) return -1*$place;

    }
    public function rowColor($loop)
    {
        if($loop == 1) return 'warning';
        if($loop == 2) return 'light';
        if($loop == 3) return 'danger';
        return 'info';
    }


}
