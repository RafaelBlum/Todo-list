<div>
    {{-- CREATE TASK --}}
    <div class="mt-4">
        <input class="shadow dark:text-white appearance-none border rounded w-full py-2 px-3 mr-4 text-grey-darker dark:bg-gray-300" placeholder="Descrição da tarefa"
        wire:model.defer="title" wire:keydown.enter="save">

        @error('title')
            <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1 dark:text-white">
                {{$message}}
            </span>
        @enderror
    </div>
</div>
