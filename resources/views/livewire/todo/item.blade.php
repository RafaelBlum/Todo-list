<div class="flex mb-4 items-center justify-between">

    {{-- title UPDATE --}}
    <livewire:todo.title :todo="$todo" />

    {{-- checked UPDATE --}}
    <input class="ml-4 accent-pink-500 justify-end" type="checkbox" wire:model="todo.checked">

    {{-- delete DELETE --}}
    <livewire:todo.delete :todo="$todo" :key="$todo->id .'-delete'"/>
</div>

