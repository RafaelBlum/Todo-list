{{--<div class="flex mb-4 items-center justify-between">--}}

{{--    --}}{{-- title UPDATE --}}
{{--    <livewire:todo.title :todo="$todo" />--}}

{{--    --}}{{-- checked UPDATE --}}
{{--    <input class="ml-4 accent-pink-500 justify-end" type="checkbox" wire:model="todo.checked">--}}

{{--    --}}{{-- delete DELETE --}}
{{--    <livewire:todo.delete :todo="$todo" :key="$todo->id .'-delete'"/>--}}
{{--</div>--}}

<section class="mt-10" id="tasks">

    {{-- ITEM TASK --}}
    <div class="font-sans mb-1 pt-1 p-1 rounded bg-gray-200">
        {{--  --}}
        <div class="flex flex-col flex-wrap content-center">
            <div class="flex flex-row">
                {{-- title UPDATE --}}
                <livewire:todo.title :todo="$todo" :key="$todo->id"/>

                {{-- input|checked type="checkbox" --}}
                <div class="text-sm font-semibold text-slate-500">
                    <label>
                        <input class="w-9 h-9 flex items-center justify-center bg-gray-100 rounded-lg" type="checkbox" wire:model="todo.checked">
                    </label>
                </div>

            </div>

            {{-- delete|details --}}
            <div class="w-full text-sm font-medium text-slate-700">
                <div class="space-x-2 flex text-sm">
                    <div class="flex flex-wrap">
                        User | {{date('d/m/Y', strtotime($todo->created_at))}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
