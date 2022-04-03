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


$stageForPosition = Stage::all();
foreach($stageForPosition as $s)
{
    $poz = 0;
    $position = Result::where('stage_id','<=', $s->id )
    ->selectRaw("team_id")
    ->selectRaw("sum(points) as sum")
    ->groupBy('team_id')
    ->orderBy('sum', 'DESC')
    ->get();
    foreach($position as $p)
    {
        $poz++;
        $positionTable[$s->id][$p->team_id]=$poz;
    };

};

        $results = Result::
        selectRaw("team_id")
        ->selectRaw("sum(points) as sum")
        ->groupBy('team_id')
        ->orderBy('sum', 'DESC')
        ->get();

        $stages = Stage::all();
        $stageCategory = $stages->pluck('category')->toArray();
        $closeStageNumber=0;
        foreach($stages as $stage)
        {
            $maxStagePts[$stage->id]=$stage->maxpoints;
            if ($stage->stagestate=="Zakończone")  $closeStageState[$stage->id]=true;
            else $closeStageState[$stage->id]=false;
            if ($closeStageState[$stage->id]) $closeStageNumber++;
        }

        return view('livewire.resultstable',[
            'results' => $results,
            'punkty' => $punkty,
            'suma' => $suma,
            'ilezadan' => $ilezadan,
            'stageCategory' => $stageCategory,
            'closeStageState' => $closeStageState,
            'maxStagePts' => $maxStagePts,
            'positionTable' => $positionTable,
            'closeStageNumber' => $closeStageNumber,
        ])->layout('main.app');
    }
}
