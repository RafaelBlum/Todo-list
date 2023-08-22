<?php

namespace App\Http\Livewire\Todo;

use Livewire\Component;
use App\Models\Todo as ModelsTodo;
use App\Http\Livewire\Todo;

class Item extends Component
{

    public ModelsTodo $todo;

    protected $rules = [
        'todo.checked' => 'boolean',
    ];
    
    public function render()
    {
        return view('livewire.todo.item');
    }

    /**
     * updated | atualiza tudo no componente
     * updatedTodo | atualiza component todo_
    */
    public function updatedTodo()
    {

        $this->todo->save();

        $this->emitTo(\App\Http\Livewire\Todo::class, 'todo::updated');
    }
}
