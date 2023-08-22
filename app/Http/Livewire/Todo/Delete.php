<?php

namespace App\Http\Livewire\Todo;

use App\Models\Todo;
use Livewire\Component;

class Delete extends Component
{
    public Todo $todo;

    public function render()
    {
        return view('livewire.todo.delete');
    }

    public function destroy()
    {
        $this->todo->delete();

        $this->emitTo(\App\Http\Livewire\Todo::class, 'todo::deleted');
    }
}
