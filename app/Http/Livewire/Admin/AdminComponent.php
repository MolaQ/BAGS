<?php

namespace App\Http\Livewire\Admin;

use Illuminate\View\Component;
use Livewire\Component as LivewireComponent;
use Livewire\WithPagination;

class AdminComponent extends LivewireComponent
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
}
