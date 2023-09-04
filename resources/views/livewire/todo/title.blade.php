<div x-data="{ open: false }" class="flex-auto flex-col">

        <p x-on:click="open = true" class="w-full text-lg text-bold font-bold relative flex text-indigo-700 dark:text-white">
            {{$todo->title}}
        </p>

        <ul x-show="open" @click.away="open = false" class="flex flex-row flex-wrap justify-between md:justify-between content-center"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 scale-90"
            x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-300"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-90"
        >
            <li class="flex-auto">
                <span class="flex items-center font-medium tracking-wide text-red-300 text-xs mt-1 ml-1 dark:text-white">
                    Edite a descrição
                </span>
                <input class="block text-sm py-1 px-1 rounded w-full border outline-none focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent border-b-4"
                       type="text" value="{{$todo->title}}" wire:model.click="title" wire:keydown.enter="saveTitle" placeholder="Titulo"/>
                @error('title')
                <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1 dark:text-white">
                        {{$message}}
                    </span>
                @enderror
            </li>
            @can('update', $todo)
                <li class="flex flex-auto flex-wrap content-center justify-center">
                    {{-- delete DELETE --}}
                    <livewire:todo.delete :todo="$todo" :key="$todo->id .'-delete'"/>
                </li>
            @endcan
        </ul>

</div>


