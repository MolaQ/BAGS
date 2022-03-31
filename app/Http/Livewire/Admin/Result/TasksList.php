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
    public $teams;

    public function addPoints($id)
    {
        $this->stage = Stage::findOrFail($id);
        $this->dispatchBrowserEvent('show-form');
    }
    public function test()
    {
        $state = $this->state;
        dd($state);
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
