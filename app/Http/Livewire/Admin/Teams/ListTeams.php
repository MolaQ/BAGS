<?php

namespace App\Http\Livewire\Admin\Teams;

use App\Models\Team;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class ListTeams extends Component
{
    public $state = [];

    public $team;

    public $idUserToDelete = null;

    public $showEditForm = false;

    public function addNew()
    {
        $this->state = [];

        $this->showEditForm = false;
        $this->dispatchBrowserEvent('show-form');
    }

    public function createTeam()
    {
        //dd($this->state);
        $validatedData = Validator::make($this->state,[
            'teammembers' => 'required',
            'classname' => 'required',
            'group' => 'required',
        ])->validate();

        Team::create($validatedData);

        $this->dispatchBrowserEvent('hide-form');
        session()->flash('message', 'Zespół dodany pomyślnie');
   
    }

public function editTeam(Team $team)
{
    $this->showEditForm = true;

    $this->team = $team;

    $this->state = $team->toArray(); 
    
    $this->dispatchBrowserEvent('show-form');
}

public function updateTeam()
{
         $validatedData = Validator::make($this->state,[
        'teammembers' => 'required',
        'classname' => 'required',
        'group' => 'required',
    ])->validate();
 
    $this->team->update($validatedData);
    $this->dispatchBrowserEvent('hide-form');
    session()->flash('message', 'Dane zespołu zaktualizowane pomyślnie');
}

public function confirmTeamRemoval($teamId)
{
    $this->idUserToDelete = $teamId;
    $this->dispatchBrowserEvent('show-delete-modal');
}
public function deleteTeam()
{
$team = Team::findOrFail($this->idUserToDelete);
$team->delete();
$this->dispatchBrowserEvent('hide-delete-modal');
session()->flash('message', 'Zespół usunięty pomyślnie');
}



    public function render()
    {
        $teams = Team::latest()->paginate();
        return view('livewire.admin.teams.list-teams', [
            'teams' => $teams,
            ]);
    }
}
