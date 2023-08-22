<div>
    {{--  --}}
    <div class="mt-4">
        <input class="shadow appearance-none border rounded w-full py-2 px-3 mr-4 text-grey-darker" placeholder="Descrição da tarefa"
        wire:model.defer="title" wire:keydown.enter="save">

        @error('title')
            <div class="relative flex flex-col min-w-0 break-words bg-red-100 border-0 bg-clip-border rounded-2xl mb-5 mt-3 draggable">
                <div class="flex text-danger font-weight-light justify-center bg-transparent">
                    {{$message}}
                </div>
            </div>
        @enderror
    </div>
</div>
