<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class UserCreate extends Component
{
    public $data = [];

    public function render()
    {
        return view('livewire.userCreate');
    }

    public function crearUsuario()
    {

        $response = Http::withHeaders([
            'Accept' => 'Application/json'
        ]) -> post('http://127.0.0.1:8000/api/users', $this->data);
        if ($response->successful()) {
            return redirect('/user');
        }
    }

}
