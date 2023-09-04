<?php

namespace App\Http\Livewire\Todo;

use App\Models\Todo;
use Livewire\Component;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Delete extends Component
{
    use AuthorizesRequests;
    public Todo $todo;

    public function render()
    {
        return view('livewire.todo.delete');
    }

    public function destroy()
    {
        $this->authorize('delete', $this->todo);

        $this->todo->delete();

        $this->emitTo(\App\Http\Livewire\Todo::class, 'todo::deleted');
    }
}
