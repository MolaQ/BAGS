<?php

namespace App\Http\Livewire\Admin\Stages;

use App\Models\Stage;
use Livewire\Component;

class ListStages extends Component
{
    public $state = [];

    public $stage;

    public $idStageToDelete = null;

    public $showEditForm = false;


    public function render()
    {
        $stages = Stage::all();
        return view('livewire.admin.stages.list-stages',[
            'stages' => $stages,
        ]);
    }
}
