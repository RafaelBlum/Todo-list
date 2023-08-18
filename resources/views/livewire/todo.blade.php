<div class="mb-4">
    <div class="flex mt-4">
        <input class="shadow appearance-none border rounded w-full py-2 px-3 mr-4 text-grey-darker" placeholder="Tarefa">
        <button class="flex-no-shrink p-2 border-2 rounded text-teal border-teal hover:text-white hover:bg-teal">Add</button>
    </div>
</div>
<div>
    @foreach($todos as $todo)
    <div class="flex mb-4 items-center">
        <p class="w-full text-sm text-grey-darkest">{{$todo->title}}</p>
        <input type="checkbox">
        <button class="middle none center mr-4 rounded-lg bg-red-500 px-4 py-2 font-sans text-xs font-bold
                            uppercase text-white shadow-md shadow-red-500/20 transition-all hover:shadow-lg hover:shadow-red-500/40
                            focus:opacity-[0.95] focus:shadow-none active:opacity-[0.85] active:shadow-none
                            disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" data-ripple-light="true">
            Concluir
        </button>
    </div>
        @endforeach
</div>
