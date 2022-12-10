<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class UserEdit extends Component
{
    public $UserID;
    public $data = [];

    public function mount($id)
    {
        $this->UserID = $id;
        $this->data = Http::get('http://127.0.0.1:8000/api/users/' . $id)->json();
    }

    public function render()
    {
        return view('livewire.userEdit');
    }

    public function editarUsuario()
    {
        $response = Http::withHeaders(['Accept'=>'Application/json'])
        ->put('http://127.0.0.1:8000/api/users/' . $this->UserID, $this->data);
        if ($response->successful()) {
            return redirect('/user');
        }
    }
}
