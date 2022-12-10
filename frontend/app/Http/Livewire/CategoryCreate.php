<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class CategoryCreate extends Component
{
    public $data = [];

    public function render()
    {
        return view('livewire.categoryCreate');
    }

    public function crearCategoria()
    {

        $response = Http::withHeaders([
            'Accept' => 'Application/json'
        ]) -> post('http://127.0.0.1:8000/api/categories', $this->data);
        if ($response->successful()) {
            return redirect('/categories');
        }
    }

}
