<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class EntryEdit extends Component
{
    public $EntryID;
    public $data = [];

    public function mount($id)
    {
        $this->EntryID = $id;
        $this->data = Http::get('http://127.0.0.1:8000/api/entries/' . $id)->json();
    }

    public function render()
    {
        $responseTwo = Http::get('http://127.0.0.1:8000/api/users');
        $users = $responseTwo->json();

        $responsethree = Http::get('http://127.0.0.1:8000/api/categories');
        $categories = $responsethree->json();

        return view('livewire.entryEdit', compact('users','categories'));
    }

    public function editarEntrada()
    {
        $response = Http::withHeaders(['Accept'=>'Application/json'])
        ->put('http://127.0.0.1:8000/api/entries/' . $this->EntryID, $this->data);
        if ($response->successful()) {
            return redirect('/entries');
        }
    }
}
