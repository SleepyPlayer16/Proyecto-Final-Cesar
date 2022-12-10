<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class UserController extends Component
{
    public $UserID;
    public $listeners = ['delete'];

    public function render()
    {
        $response = Http::get('http://127.0.0.1:8000/api/users');
        $users = $response->json();
        return view('livewire.user', compact('users'));
    }

    public function borrar($id)
    {
        $this->UserID = $id;
        Http::delete('http://127.0.0.1:8000/api/users/'.$this->UserID);
        return redirect('/user');
    }
}
