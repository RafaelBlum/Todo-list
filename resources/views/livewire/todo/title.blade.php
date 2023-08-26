<div x-data="{ open: false }" class="justify-center">

    <p x-on:click="open = true" id="task-{{$todo->id}}" data-editable class="w-full flex {{($todo->checked == true ? 'underline decoration-red-900 opacity-30 dark:text-white' : '')}} text-sm">
        {{$todo->title}}
    </p>

    <ul x-show="open" @click.away="open = false">
        <span class="flex items-center font-medium tracking-wide text-red-300 text-xs mt-1 ml-1 dark:text-white">Editar titulo</span>
        <input placeholder="{{$todo->title}}" class="shadow appearance-none border rounded w-full py-2 px-3 mr-4 text-grey-darker dark:bg-gray-300"
               type="text" value="{{$todo->title}}" wire:model.click="title" wire:keydown="saveTitle" style="color: black;"/>
        @error('title')
            <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1 dark:text-white">
                {{$message}}
            </span>
        @enderror
    </ul>
</div>


