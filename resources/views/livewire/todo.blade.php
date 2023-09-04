<div class="dark:bg-gray-400 h-100">

    {{--  --}}
    <section class="mb-4">
        <div class="pt-1 rounded bg-white dark:bg-gray-400">
            <livewire:todo.create/>
        </div>

        <div class="sm:flex mt-1 mb-0 sm:items-center sm:justify-center text-sm text-stone-600 dark:text-white dark:bg-gray-400">
            <label for="filter_all mr-3">
                <input type="radio" id="filter_all" name="filter" wire:model="filter" value="all" />
                <span class="mr-3">({{$this->all}}) Todos</span>
            </label>
            <label for="filter_pending">
                <input type="radio" id="filter_pending" name="filter" wire:model="filter" value="pending" />
                <span class="mr-3">({{$this->pending}}) Pendentes</span>
            </label>
            <label for="filter_done">
                <input type="radio" id="filter_done" name="filter" wire:model="filter" value="done" />
                <span>({{$this->done}}) Concluídas</span>
            </label>
        </div>
    </section>

    {{-- SECTION LIST TODO_ TASKS --}}
    @if(count($this->todos) > 0)
        @foreach($this->todos as $todo)
            <livewire:todo.item :todo="$todo" :key="$todo->id" />
        @endforeach
    @else
        <div class="p-6 max-w-sm mx-auto flex items-center space-x-6">
            <div class="flex-shrink-0 sm:w-5 sm:h-10 h-10 w-5 sm:mr-1 mr-1">
                <img src="{{asset("/images/livewire_avatar.png")}}" class="animate-bounce"/>
            </div>
            <div>
                <p class="text-gray-800">Não existem tarefas registradas!</p>
            </div>
        </div>
    @endif
</div>