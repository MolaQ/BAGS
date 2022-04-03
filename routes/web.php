<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Livewire\Admin\Result\TasksList;
use App\Http\Livewire\Admin\Stages\ListStages;
use App\Http\Livewire\Admin\Teams\ListTeams;
use App\Http\Livewire\Admin\Users\ListUsers;
use App\Http\Livewire\Resultstable;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', Resultstable::class)->name('home');
Route::get('/admin/dashboard', DashboardController::class)->name('admin.dashboard');
Route::get('/admin/users', ListUsers::class)->name('admin.users');
Route::get('/admin/teams', ListTeams::class)->name('admin.teams');
Route::get('/admin/stages', ListStages::class)->name('admin.stages');
Route::get('/admin/results', TasksList::class)->name('admin.results');



