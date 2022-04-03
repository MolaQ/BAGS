<?php

namespace App\Http\Livewire;

use App\Models\Result;
use App\Models\Stage;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Resultstable extends Component
{
    public function render()
    {

        $stageIds = Stage::all()->pluck('id')->toArray();
        $tablica = Result::whereIn('stage_id', $stageIds)->get();
        foreach($tablica as $t)
        {
            $punkty[$t->team_id][ $t->stage_id]=$t->points;
        };
        $ilezadan = sizeOf($stageIds);
//dd($punkty);
        $tablica = Result::
        selectRaw("team_id")
        ->selectRaw("sum(points) as sum")
        ->groupBy('team_id')
        ->orderBy('sum', 'DESC')
        ->get();
// dd($tablica);

        foreach ($tablica as $t)
        {
            $suma[$t->team_id] = array_sum($punkty[$t->team_id]);
        };



        // $leagues = League::where('user_id','<>',1)
        // ->where('season_id', $sid)
        // ->where('leaguename_id', $lid)
        // ->selectRaw("user_id")
        // ->selectRaw("SUM(m) as total_m")
        // ->selectRaw("SUM(p) as total_p")
        // ->selectRaw("SUM(b) as total_b")
        // ->selectRaw("SUM(gf) as total_gf")
        // ->selectRaw("SUM(ga) as total_ga")
        // ->selectRaw("SUM(w) as total_w")
        // ->selectRaw("SUM(d) as total_d")
        // ->selectRaw("SUM(l) as total_l")
        // ->groupBy('user_id')
        // ->orderBy('total_p', 'DESC')
        // ->orderBy('total_b', 'DESC')
        // ->orderBy('total_gf', 'DESC')
        // ->orderBy('total_w', 'DESC')
        // ->get();


// dd($punkty);

        $results = Result::
        selectRaw("team_id")
        ->selectRaw("sum(points) as sum")
        ->groupBy('team_id')
        ->orderBy('sum', 'DESC')
        ->get();
        return view('livewire.resultstable',[
            'results' => $results,
            'punkty' => $punkty,
            'suma' => $suma,
            'ilezadan' => $ilezadan,
        ])->layout('main.app');
    }
}
