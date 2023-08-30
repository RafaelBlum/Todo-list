{{--<div>--}}
{{--    --}}{{-- CREATE TASK --}}
{{--    <div class="mt-4">--}}
{{--        <input class="shadow dark:text-white appearance-none border rounded w-full py-2 px-3 mr-4 text-grey-darker dark:bg-gray-300" placeholder="Descrição da tarefa"--}}
{{--        wire:model.defer="title" wire:keydown.enter="save">--}}

{{--        @error('title')--}}
{{--            <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1 dark:text-white">--}}
{{--                {{$message}}--}}
{{--            </span>--}}
{{--        @enderror--}}
{{--    </div>--}}
{{--</div>--}}

<div>
    {{-- CREATE TASK --}}
    <input type="text" class="bg-gray-100 rounded w-full text-gray-700 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent border-b-4 border-gray-300
        focus:border-purple-600 transition duration-500 px-3 pb-2 pt-2 dark:bg-gray-200"
           wire:model.defer="title" wire:keydown.enter="save" placeholder="Nova tarefa">

    @error('title')
    <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1 dark:text-white">
                {{$message}}
            </span>
    @enderror
</div>

