<div class="flex mb-4 items-center justify-between">

    <livewire:todo.title :todo="$todo"/>

    <input class="ml-4 accent-pink-500 justify-end" type="checkbox" wire:model="todo.checked">

    <livewire:todo.delete :todo="$todo" :key="$todo->id .'-delete'"/>
</div>

