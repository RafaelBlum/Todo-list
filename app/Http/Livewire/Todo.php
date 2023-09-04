<?php

namespace App\Http\Livewire;

use App\Models\Todo as ModelsTodo;
use http\QueryString;
use Livewire\Component;

/**
 * @property-read int $all
 * @property-read int $pending
 * @property-read int $done
*/
class Todo extends Component
{
    public string $filter = 'all';

    /**
     * variable add filter url
     *
    */
    protected $queryString = ['filter'=> ['except'=> 'all']];


    /**
     * Event Listeners
     * Os listeners são um par [chave => valor]
     *  - Onde a chave é o evento a ser escutado;
     *  - E o valor é o método a ser chamado no componente;
    */
    protected $listeners = [
        'todo::updated' => '$refresh',
        'todo::created' => '$refresh',
        'todo::deleted' => '$refresh',
        'todo::updatedTitle' => '$refresh'
    ];

    public function render()
    {
        return view('livewire.todo');
    }

    /**
     * Computed Property doc: https://laravel-livewire.com/docs/2.x/properties#computed-properties
     *
    */
    public function getTodosProperty()
    {
        return ModelsTodo::query()
            ->when($this->filter == "done", fn($q) => $q->where('checked', true))
            ->when($this->filter == "pending", fn($q)=>$q->where('checked', false))
            ->orderBy('checked')
            ->get();
    }

    public function getAllProperty()
    {
        return ModelsTodo::count();
    }

    public function getPendingProperty()
    {
        return ModelsTodo::where('checked', false)->count();
    }

    public function getDoneProperty()
    {
        return ModelsTodo::where('checked', true)->count();
    }
}
