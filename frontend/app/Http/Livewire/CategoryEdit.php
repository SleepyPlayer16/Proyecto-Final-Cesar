<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class CategoryEdit extends Component
{
    public $CategoryID;
    public $data = [];

    public function mount($id)
    {
        $this->CategoryID = $id;
        $this->data = Http::get('http://127.0.0.1:8000/api/categories/' . $id)->json();
    }

    public function render()
    {
        return view('livewire.categoryEdit');
    }

    public function editarCategoria()
    {
        $response = Http::withHeaders(['Accept'=>'Application/json'])
        ->put('http://127.0.0.1:8000/api/categories/' . $this->CategoryID, $this->data);
        if ($response->successful()) {
            return redirect('/categories');
        }
    }
}
