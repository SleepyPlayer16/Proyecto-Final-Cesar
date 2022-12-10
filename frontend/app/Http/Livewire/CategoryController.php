<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class CategoryController extends Component
{
    public $CategoryID;
    public $listeners = ['delete'];

    public function render()
    {
        $response = Http::get('http://127.0.0.1:8000/api/categories');
        $categories = $response->json();
        return view('livewire.categories', compact('categories'));
    }

    public function borrar($id)
    {
        $this->CategoryID = $id;
        Http::delete('http://127.0.0.1:8000/api/categories/'.$this->CategoryID);
        return redirect('/categories');
    }
}
