<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class UserInspect extends Component
{
    public $UserID;
    public function mount($id)
    {
        $this->UserID = $id;
    }

    public function render()
    {
        $user = Http::get('http://127.0.0.1:8000/api/users/'.$this->UserID)->json();
        return view('livewire.userInspect', compact('user'));
    }
}
