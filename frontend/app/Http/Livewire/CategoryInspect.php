<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class CategoryInspect extends Component
{
    public $CategoryID;
    public function mount($id)
    {
        $this->CategoryID = $id;
    }

    public function render()
    {
        $category = Http::get('http://127.0.0.1:8000/api/categories/'.$this->UserID)->json();
        return view('livewire.categoryInspect', compact('category'));
    }
}
