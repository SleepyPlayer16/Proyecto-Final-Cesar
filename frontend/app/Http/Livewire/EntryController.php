<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class EntryController extends Component
{
    public $ControllerID;
    public $listeners = ['delete'];

    public function render()
    {
        $response = Http::get('http://127.0.0.1:8000/api/entries');
        $entries = $response->json();
        return view('livewire.entries', compact('entries'));
    }

    public function borrar($id)
    {
        $this->ControllerID = $id;
        Http::delete('http://127.0.0.1:8000/api/entries/'.$this->ControllerID);
        return redirect('/entries');
    }
}
