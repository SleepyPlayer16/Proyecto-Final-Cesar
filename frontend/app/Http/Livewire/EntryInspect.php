<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class EntryInspect extends Component
{
    public $EntryID;
    public function mount($id)
    {
        $this->EntryID = $id;
    }

    public function render()
    {
        $entry = Http::get('http://127.0.0.1:8000/api/entries/'.$this->EntryID)->json();
        return view('livewire.entryInspect', compact('entry'));
    }
}
