<?php

namespace App\Http\Livewire\Admin\Stages;

use App\Models\Stage;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class ListStages extends Component
{
    public $state = [];

    public $stage;

    public $idStageToDelete = null;

    public $showEditForm = false;

    public function addNew()
    {
        $this->state = [];

        $this->showEditForm = false;
        $this->dispatchBrowserEvent('show-form');
    }


    public function editStage()
    {
        dd("editStage");

    }

    public function updateStage()
    {
        dd('updateStage');

    }

    public function createStage()
    {
        $validatedData = Validator::make($this->state,[
            'category' => 'required | integer',
            'title' => 'required',
            'description' => 'required',
            'maxpoints' => 'required | integer',
            'stagestate' => 'required | integer',
        ])->validate();

        Stage::create($validatedData);

        $this->dispatchBrowserEvent('hide-form', ['message' => 'Zadanie dodane pomyślnie']);

    }

    public function confirmStageRemoval($stageId)
    {
        dd("confirmStageremoval");

    }
    public function render()
    {
        $stages = Stage::all();
        return view('livewire.admin.stages.list-stages',[
            'stages' => $stages,
        ]);
    }
}
