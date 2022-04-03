<?php

namespace App\Http\Livewire\Admin\Result;

use App\Models\Result;
use App\Models\Stage;
use App\Models\Team;
use Livewire\Component;

class TasksList extends Component
{
    public $state = [];
    public $showEditForm = false;
    public $stage;
    public $stageState;
    public Stage $task;
    public $teams;
    public $zadanie = null;
    public $points;

    public function addPoints(Stage $stage)
    {
        $id = $stage->id;
        $task = Stage::findOrFail($id);
        // $this->zadanie= $task->toArray();
        $this->zadanie= $task;

        //dd($this->zadanie);
        $this->dispatchBrowserEvent('show-form');



    }
    public function points($taskId)
    {
        // dd($taskId);

        $state = $this->state;
        $teams = Team::all();

        $tablica = array($state);

        foreach($teams as $team)
        {
           if (array_key_exists($team->id, $tablica[0]))
            {
                $result = Result::updateOrCreate(
                    ['stage_id' => $taskId, 'team_id' => $team->id],
                    ['stage_id' => $taskId,
                    'team_id' => $team->id,
                    'points' => $tablica[0][$team->id]*100
                ]);

            };


        }

        $stageState = Stage::find($taskId);
        if(($stageState->stagestate) != "Zakończone"){
            if((sizeof($state))>0) $stageState->update(['stagestate' => 'W trakcie']);
            if((sizeof($state))==10) $stageState->update(['stagestate' => 'Zakończone']);
        }


        $this->dispatchBrowserEvent('hide-form', ['message' => 'Punkty zadania zaktualizowane pomyślnie']);
    }


    public function render()
    {

        $stages = Stage::all();
        $teams = Team::all();
        $this->teams = $teams;

        return view('livewire.admin.result.tasks-list',[
            'stages' => $stages,
            'teams'  => $teams,
        ]);
    }
}
