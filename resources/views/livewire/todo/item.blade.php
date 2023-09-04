<section class="mt-2 mb-0 font-sans dark:bg-gray-400 dark:text-white" id="tasks-{{$todo->id}}">

    {{-- ITEM TASK --}}
        <div class="flex flex-col flex-wrap content-center">
            <div class="flex flex-row">
                {{-- title UPDATE --}}
                <livewire:todo.title :todo="$todo" :key="$todo->id"/>

                {{-- input|checked type="checkbox" --}}
                <label>
                    <input class="w-8 h-8 flex items-center justify-center rounded-lg" type="checkbox" wire:model="todo.checked">
                </label>

            </div>

            {{-- delete|details --}}
            <div class="w-full text-sm font-medium">
                <div class="flex text-sm">
                    <div class="flex flex-wrap">
                        {{$todo->user->name}} | {{date('d/m/Y', strtotime($todo->created_at))}}
                    </div>
                </div>
            </div>
        </div>
</section>
