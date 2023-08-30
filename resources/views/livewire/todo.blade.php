{{--<div>--}}
{{--    --}}{{-- Input task | CREATE --}}
{{--    <div class="mb-4">--}}
{{--        <livewire:todo.create/>--}}
{{--    </div>--}}

{{--    --}}{{-- Filter --}}
{{--    <div class="sm:flex mt-2 mb-2 sm:items-center sm:justify-center text-sm text-stone-500 dark:text-white">--}}
{{--            <label for="filter_all" class="mr-3">--}}
{{--                <input type="radio" id="filter_all" name="filter" wire:model="filter" value="all">--}}
{{--                <span>Todas</span>--}}
{{--            </label>--}}

{{--            <label for="filter_pending" class="mr-3">--}}
{{--                <input type="radio" id="filter_pending" name="filter" wire:model="filter" value="pending">--}}
{{--                <span>Pendentes</span>--}}
{{--            </label>--}}

{{--            <label for="filter_done">--}}
{{--                <input type="radio" id="filter_done" name="filter" wire:model="filter" value="done">--}}
{{--                <span>Concluidas</span>--}}
{{--            </label>--}}
{{--    </div>--}}

{{--        --}}{{-- LIST TASKS --}}
{{--        @if(count($todos) > 0)--}}
{{--            @foreach($todos as $todo)--}}
{{--                <livewire:todo.item :todo="$todo" :key="$todo->id" />--}}
{{--            @endforeach--}}
{{--        @else--}}
{{--            <div class="flex justify-center rounded-lg font-medium tracking-wide text-red-500 text-xs mt-6 mb-6 dark:text-white">--}}
{{--                <div>--}}
{{--                    Não existem tarefas registradas!--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        @endif--}}
{{--</div>--}}

<div class="dark:bg-gray-400">

    {{--  --}}
    <section>
        <div class="pt-8 rounded bg-white dark:bg-gray-400">
            <livewire:todo.create/>
        </div>

        <div class="sm:flex mt-1 mb-0 sm:items-center sm:justify-center text-sm text-stone-600 dark:text-white dark:bg-gray-400">
            <label for="filter_all" class="mr-3">
                <button wire:model="filter" value="all" id="filter_all" name="filter" class="flex items-center justify-center p-1" type="button">
                    ({{$this->all}}) Todas
                </button>
            </label>

            <label for="filter_pending" class="mr-3">
                <button wire:model="filter" value="pending" id="filter_pending" name="filter" class="flex items-center justify-center p-1" type="button">
                    ({{$this->pending}}) Pendentes
                </button>
            </label>

            <label for="filter_done">
                <button wire:model="filter" value="done" id="filter_done" name="filter" class="flex items-center justify-center p-1" type="button">
                    ({{$this->done}}) Concluidas
                </button>
            </label>
        </div>
    </section>

    {{-- SECTION LIST TODO_ TASKS --}}
    @if(count($this->todos) > 0)
        @foreach($this->todos as $todo)
            <livewire:todo.item :todo="$todo" :key="$todo->id" />
        @endforeach
    @else
        <div class="p-6 max-w-sm mx-auto bg-white rounded-xl shadow-md flex items-center space-x-6">
            <div class="flex-shrink-0 sm:w-7 sm:h-10 h-10 w-5 sm:mr-5">
                <img src="{{asset("/images/livewire_avatar.png")}}" class="animate-bounce"/>
            </div>
            <div>
                <p class="text-gray-800">Não existem tarefas registradas!</p>
            </div>
        </div>
    @endif
</div>