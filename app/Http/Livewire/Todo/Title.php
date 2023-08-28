<?php

namespace App\Http\Livewire\Todo;

use App\Models\Todo as ModelsTodo;
use Livewire\Component;

class Title extends Component
{
    public ModelsTodo $todo;
    public string $title = "";

    public function render()
    {
        return view('livewire.todo.title');
    }

    public function updatedTodo()
    {
        $this->todo->save();

        $this->emitTo(\App\Http\Livewire\Todo::class, 'todo::updated');
    }

    public function saveTitle()
    {
        $this->validate(['title' => ['required', 'min:3']],
            [
                'title.required' => 'Descrição é obrigatória!',
                'title.min'=> 'Mínimo de 3 letras!'
            ]);

        $this->todo->title = $this->title;
        $this->todo->save();

        $this->emitTo(\App\Http\Livewire\Todo::class, 'todo::updatedTitle');
    }
}
