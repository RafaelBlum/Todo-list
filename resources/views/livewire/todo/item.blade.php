<div class="flex mb-4 items-center">
    <p class="w-full {{($todo->checked == true ? 'underline decoration-red-900 opacity-30' : '')}} text-sm text-grey-darkest">{{$todo->title}}</p>

    <input class="ml-4" type="checkbox" wire:model="todo.checked">

    <livewire:todo.delete :todo="$todo" :key="$todo->id .'-delete'"/>
</div>