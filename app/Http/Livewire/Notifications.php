<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Notifications extends Component
{
    public $message;
    protected $listeners = ['notifications'=>'notify'];
    public $type;

    public function render()
    {
        return view('livewire.notifications');
    }

    public function notify($props)
    {
        $this->message = $props['message'];
        $this->type = $props['type'];
    }
}
