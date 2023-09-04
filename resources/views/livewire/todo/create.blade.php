<div>
    {{-- CREATE TASK --}}
    <div class="w-full">
        <input type="text" placeholder="Descrição tarefa" class="block text-sm py-3 px-4 rounded-lg w-full border outline-none focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent border-b-4"
               wire:model.defer="title" wire:keydown.enter="save" placeholder="Nova tarefa"/>
    </div>

    @error('title')
    <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1 dark:text-white">
                {{$message}}
            </span>
    @enderror
</div>

