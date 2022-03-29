<?php

namespace App\Http\Livewire\Admin\Users;

use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class ListUsers extends Component
{
    public $state = [];

    public function addNew()
    {
        $this->dispatchBrowserEvent('show-form');
    }

    public function createUser()
    {
        Validator::make($this->state,[
            'name' => 'required',
            'classname' => 'required',
        ]);
    }

    public function render()
    {
        return view('livewire.admin.users.list-users');
    }
}
