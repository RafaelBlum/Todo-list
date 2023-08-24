<div>
    {{--  --}}
    <!--========== Input task ==========-->
    <div class="mb-4">
        <livewire:todo.create/>
    </div>

    {{--  --}}
    <!--========== Filter ==========-->
    <div class="sm:flex mt-2 mb-2 sm:items-center sm:justify-center text-sm text-stone-500 dark:text-white">
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

        {{-- LIST TASKS --}}
        @if(count($todos) > 0)
            @foreach($todos as $todo)
                <livewire:todo.item :todo="$todo" :key="$todo->id" />
            @endforeach
        @else
            <div class="flex justify-center rounded-lg font-medium tracking-wide text-red-500 text-xs mt-6 mb-6 dark:text-white">
                <div>
                    Não existem tarefas registradas!
                </div>
            </div>
        @endif
</div>
