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


    public function editStage(Stage $stage)
    {
        $this->showEditForm = true;

        $this->stage = $stage;

        $this->state = $stage->toArray();

        $this->dispatchBrowserEvent('show-form');

    }

    public function updateStage()
    {
        // dd($this->state);
        $validatedData = Validator::make($this->state,[
            'category' => 'required',
            'title' => 'required',
            'description' => 'required',
            'maxpoints' => 'required | integer',
            'stagestate' => 'required',
        ])->validate();

        $this->stage->update($validatedData);
        $this->dispatchBrowserEvent('hide-form', ['message' => 'Zadanie zaktualizowane pomyślnie']);

    }

    public function createStage()
    {
          $validatedData = Validator::make($this->state,[
            'category' => 'required',
            'title' => 'required',
            'description' => 'required',
            'maxpoints' => 'required | integer',
            'stagestate' => 'required',
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
