<?php

namespace App\Http\Livewire\Admin\Result;

use App\Models\Stage;
use App\Models\Team;
use Livewire\Component;

class TasksList extends Component
{
    public $state = [];
    public $showEditForm = false;
    public $stage;
    public Stage $task;
    public $stageId;
    public $teams;
    public $zadanie = null;

    public function addPoints(Stage $stage)
    {
        $id = $stage->id;
        $task = Stage::findOrFail($id);
        // $this->zadanie= $task->toArray();
        $this->zadanie= $task;

        //dd($this->zadanie);
        $this->dispatchBrowserEvent('show-form');
    }
    public function points()
    {
        $state = $this->state;

        //dd($state[2]['points']);
        dd(count ( $state ));
    }


    public function render()
    {
        $stages = Stage::orderBy('stagestate')->get();
        $teams = Team::all();
        $this->teams = $teams;


        return view('livewire.admin.result.tasks-list',[
            'stages' => $stages,
            'teams'  => $teams,
        ]);
    }
}
