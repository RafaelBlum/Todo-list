<div>
    {{--  --}}
    <!--========== Input task ==========-->
    <div class="mb-4">
        <livewire:todo.create/>
    </div>

    {{--  --}}
    <!--========== Filter ==========-->
    <div class="sm:flex mt-2 mb-2 sm:items-center sm:justify-center text-sm text-stone-500">
            <label for="filter_all" class="mr-3">
                <input type="radio" id="filter_all" name="filter" wire:model="filter" value="all">
                <span>Todas</span>
            </label>

            <label for="filter_pending" class="mr-3">
                <input type="radio" id="filter_pending" name="filter" wire:model="filter" value="pending">
                <span>Pendentes</span>
            </label>

            <label for="filter_done">
                <input type="radio" id="filter_done" name="filter" wire:model="filter" value="done">
                <span>Concluidas</span>
            </label>
    </div>

        {{--  --}}
        @if(count($todos) > 0)
            @foreach($todos as $todo)
                <livewire:todo.item :todo="$todo" :key="$todo->id" />
            @endforeach
        @else
            <div class="relative flex flex-col min-w-0 break-words bg-green-300 border-0 bg-clip-border rounded-2xl mb-5 draggable">
                <div class="px-9 pt-5 flex text-indigo-600 font-bold justify-center items-stretch flex-wrap min-h-[70px] pb-0 bg-transparent">
                    Todas metas foram concluídas!! :)
                </div>
            </div>
        @endif
</div>
