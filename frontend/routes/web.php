<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\UserController;
use App\Http\Livewire\UserInspect;
use App\Http\Livewire\UserEdit;
use App\Http\Livewire\UserCreate;

use App\Http\Livewire\EntryController;
use App\Http\Livewire\EntryInspect;
use App\Http\Livewire\EntryCreate;
use App\Http\Livewire\EntryEdit;

use App\Http\Livewire\CategoryController;
use App\Http\Livewire\CategoryEdit;
use App\Http\Livewire\CategoryCreate;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/user', UserController::class);
Route::get('/user/{id}/inspect', UserInspect::class);
Route::get('/user/{id}/edit', UserEdit::class);
Route::get('/user/create', UserCreate::class);

Route::get('/entries', EntryController::class);
Route::get('/entries/{id}/inspect', EntryInspect::class);
Route::get('/entries/{id}/edit', EntryEdit::class);
Route::get('/entries/create', EntryCreate::class);

Route::get('/categories', CategoryController::class);
Route::get('/categories/{id}/edit', CategoryEdit::class);
Route::get('/categories/create', CategoryCreate::class);