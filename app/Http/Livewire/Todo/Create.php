<?php

namespace App\Http\Livewire\Todo;

use App\Models\Todo;
use Illuminate\Support\Facades\Auth;
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

        /**
         * Se estiver logado pode criar tarefa
        */
        if(\auth()->user()){


            Todo::create(['title' => $this->title, 'user_id'=> \auth()->id()]);

            $this->reset('title');
            $this->emitTo(\App\Http\Livewire\Todo::class, 'todo::created');

            $this->emit('notifications', [
                'type'      => 'success',
                'message'   => 'Atividade criada com sucesso!!'
            ]);
        }

        $this->emit('notifications', [
            'type'      => 'error',
            'message'   => 'Você precisa se logar para criar atividade'
        ]);
    }
}
