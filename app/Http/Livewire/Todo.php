<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Todo as ModelsTodo;

class Todo extends Component
{
    public function render()
    {
        return view('livewire.todo', [
            'todos' => ModelsTodo::all()
        ]);
    }
}
