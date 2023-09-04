<?php

namespace App\Http\Livewire\Todo;

use App\Models\Todo as ModelsTodo;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;

class Title extends Component
{
    use AuthorizesRequests;
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

        /**
         * Events emit
         * pt-br: Esta condição deixa somente o usuário criador modificar e
         * lança msg de evento na tela com componente livewire Notifications
        */
        if(!auth()->check() || !auth()->user()->can('update', $this->todo)){
            $this->emit('notifications', [
                'type'      => "warning",
                'message'   => "Você não pode atualizar o titulo da atividade <br> {$this->todo->title}"
            ]);

            return;
        }

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
