<?php

namespace App\Http\Livewire\Todo;

use App\Models\Todo;
use Livewire\Component;


class Create extends Component
{

    public string $title ='';

    public function render()
    {
        return view('livewire.todo.create');
    }

    public function save()
    {
        $this->validate(['title' => ['required', 'min:3']],
            [
                'title.required' => 'Descrição é obrigatória!',
                'title.min'=> 'Mínimo de 3 letras, por favor!'
            ]);

        Todo::create(['title' => $this->title]);
        $this->reset('title');
        $this->emitTo(\App\Http\Livewire\Todo::class, 'todo::created');
    }
}
