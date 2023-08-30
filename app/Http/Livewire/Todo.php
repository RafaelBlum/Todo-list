<?php

namespace App\Http\Livewire;

use App\Models\Todo as ModelsTodo;
use Livewire\Component;

/**
 * @property-read int $all
*/
class Todo extends Component
{
    public string $filter = 'all';
    protected $queryString = ['filter'];

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
