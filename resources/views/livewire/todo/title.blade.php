{{--<div x-data="{ open: false }" class="justify-center font-sans">--}}

{{--    <p x-on:click="open = true" id="task-{{$todo->id}}" data-editable class="w-full text-lg text-sky-400 text-bold relative flex {{($todo->checked == true ? 'underline decoration-red-900 opacity-30 dark:text-white' : '')}}">--}}
{{--        {{$todo->title}}--}}
{{--    </p>--}}

{{--    <ul x-show="open" @click.away="open = false">--}}
{{--        <span class="flex items-center font-medium tracking-wide text-red-300 text-xs mt-1 ml-1 dark:text-white">Editar titulo</span>--}}
{{--        <input class="shadow appearance-none border rounded w-full py-2 px-3 mr-4 text-grey-darker dark:bg-gray-300"--}}
{{--               type="text" x-text="{{$todo->title}}" value="{{$todo->title}}" wire:model.click="title" wire:keydown="saveTitle" style="color: black;"/>--}}
{{--        @error('title')--}}
{{--        <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1 dark:text-white">--}}
{{--                {{$message}}--}}
{{--            </span>--}}
{{--        @enderror--}}
{{--    </ul>--}}
{{--    <div class="text-sm italic lowercase">User |--}}
{{--        <code class="text-info">{{date('d/m/Y', strtotime($todo->created_at))}}</code>--}}
{{--    </div>--}}
{{--</div>--}}

{{-- title|edit --}}
<div x-data="{ open: false }" class="flex-auto flex-col text-base font-semibold text-slate-900">

    @if($todo->checked)
        <p x-on:click="open = true" id="task-{{$todo->id}}" class="w-full text-lg text-gray-800text-bold relative flex underline text-red-900 opacity-30 dark:text-white">
            {{\Illuminate\Support\Str::upper($todo->title)}}
        </p>
    @else
        <p x-on:click="open = true" id="task-{{$todo->id}}" class="w-full text-lg text-red-500 text-bold relative flex">
            {{\Illuminate\Support\Str::upper($todo->title)}}
        </p>
    @endif

    <ul x-show="open" @click.away="open = false" class="flex flex-row flex-wrap p-1 justify-between md:justify-between content-center">
        <li class="flex-auto">
            <span class="flex items-center font-medium tracking-wide text-red-300 text-xs mt-1 ml-1 dark:text-white">
                Edite a descrição
            </span>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 mr-4 text-grey-darker dark:bg-gray-300"
                   type="text" value="{{$todo->title}}" wire:model.click="title" wire:keydown.enter="saveTitle" placeholder="Titulo"/>
            @error('title')
            <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1 dark:text-white">
                    {{$message}}
                </span>
            @enderror
        </li>
        <li class="flex flex-auto flex-wrap content-center justify-center">
            {{-- delete DELETE --}}
            <livewire:todo.delete :todo="$todo" :key="$todo->id .'-delete'"/>
        </li>
    </ul>

{{--    <div x-data="{ open: false }" class="justify-center">--}}

{{--        <p x-on:click="open = true" id="task-{{$todo->id}}" data-editable class="w-full flex {{($todo->checked == true ? 'underline decoration-red-900 opacity-30 dark:text-white' : '')}} text-sm">--}}
{{--            {{$todo->title}}--}}
{{--        </p>--}}

{{--        <ul x-show="open" @click.away="open = false">--}}
{{--            <span class="flex items-center font-medium tracking-wide text-red-300 text-xs mt-1 ml-1 dark:text-white">Editar titulo</span>--}}
{{--            <input placeholder="{{$todo->title}}" class="shadow appearance-none border rounded w-full py-2 px-3 mr-4 text-grey-darker dark:bg-gray-300"--}}
{{--                   type="text" value="{{$todo->title}}" wire:model.click="title" wire:keydown="saveTitle" style="color: black;"/>--}}
{{--            @error('title')--}}
{{--            <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1 dark:text-white">--}}
{{--                {{$message}}--}}
{{--            </span>--}}
{{--            @enderror--}}
{{--        </ul>--}}
{{--    </div>--}}
</div>


