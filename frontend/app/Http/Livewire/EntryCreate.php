<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class EntryCreate extends Component
{
    public $data = [];

    public function render()
    {
        $responseTwo = Http::get('http://127.0.0.1:8000/api/users');
        $users = $responseTwo->json();

        $responsethree = Http::get('http://127.0.0.1:8000/api/categories');
        $categories = $responsethree->json();
        return view('livewire.entryCreate', compact('users','categories'));
    }

    public function crearEntrada()
    {
        $response = Http::withHeaders([
            'Accept' => 'Application/json'
        ]) -> post('http://127.0.0.1:8000/api/entries', $this->data);
        return redirect('/entries');
    }

}
