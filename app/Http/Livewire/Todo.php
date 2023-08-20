<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Todo as ModelsTodo;

class Todo extends Component
{

    public $filter = 'all';
    public $tot = 0;

    public function render()
    {
        $todos = \App\Models\Todo::query()
            ->when($this->filter == "done", fn($q) => $q->where('checked', 1))
            ->when($this->filter == "pending", fn($q)=>$q->where('checked', 0))
            ->get();

        return view('livewire.todo', [
            'todos' => $todos
        ]);
    }
}
