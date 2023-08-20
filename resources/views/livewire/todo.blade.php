
<div>
    <!--========== Input task ==========-->
    <div class="mb-4">
        <div class="flex mt-4">
            <input class="shadow appearance-none border rounded w-full py-2 px-3 mr-4 text-grey-darker" placeholder="Descrição da tarefa">
            <button class="flex-no-shrink p-2 border-2 rounded text-teal border-teal hover:text-white hover:bg-teal">Add</button>
        </div>
    </div>

    <!--========== Filter ==========-->
    <div class="sm:flex mt-2 mb-2 sm:items-center sm:justify-center">
            <label for="filter_all" class="mr-3">
                <input type="radio" id="filter_all" name="filter" wire:model="filter" value="all">
                <span>All</span>
            </label>

            <label for="filter_pending" class="mr-3">
                <input type="radio" id="filter_pending" name="filter" wire:model="filter" value="pending">
                <span>Pending</span>
            </label>

            <label for="filter_done">
                <input type="radio" id="filter_done" name="filter" wire:model="filter" value="done">
                <span>Done</span>
            </label>
    </div>

    <!--========== list todos component ==========-->
    @foreach($todos as $todo)
        <div class="flex mb-4 items-center">
            <p class="w-full text-sm text-grey-darkest">{{$todo->title}}</p>
            <input class="ml-4" type="checkbox">
            <button class="middle none center mr-2 ml-4 rounded-lg bg-red-200 px-1 py-0 font-sans text-xs font-bold
                            uppercase shadow-md shadow-red-300/20 transition-all hover:shadow-lg hover:shadow-red-500/40
                            focus:opacity-[0.95] focus:shadow-none active:opacity-[0.85] active:shadow-none
                            disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" data-ripple-light="true">
                X
            </button>
        </div>
    @endforeach
</div>
