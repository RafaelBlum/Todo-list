<div x-data="{ open: false }" class="justify-center" @notify="alert('Titulo editado com sucesso!')">

    <p x-on:click="open = true" id="task-{{$todo->id}}" data-editable class="w-full flex {{($todo->checked == true ? 'underline decoration-red-900 opacity-30 dark:text-white' : '')}} text-sm">
        {{$todo->title}}
    </p>

    <ul x-show="open" @click.away="open = false" :class="open ? '' : 'hidden'">
        <span class="flex items-center font-medium tracking-wide text-red-300 text-xs mt-1 ml-1 dark:text-white">Editar titulo</span>
        <input placeholder="{{$todo->title}}" @enter="$dispatch('notify')" class="shadow appearance-none border rounded w-full py-2 px-3 mr-4 text-grey-darker dark:bg-gray-300"
               type="text" x-text="{{$todo->title}}" value="{{$todo->title}}" wire:model="title" wire:keydown="saveTitle" style="color: black;"/>
        @error('title')
            <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1 dark:text-white">
                {{$message}}
            </span>
        @enderror
    </ul>
</div>


{{--<div x-data="{ open: false }">--}}
{{--    <button @click="open = true">Titulo</button>--}}

{{--    <ul x-show="open" @click.away="open = false">--}}
{{--        <input class="ml-4 accent-pink-500 " type="text" value="{{$todo->title}}" wire:model="title" wire:keydown="saveTitle">--}}
{{--    </ul>--}}
{{--</div>--}}

{{--        <script type="text/javascript" rel="script">--}}
{{--            $('p').on('click', '[data-editable]', function () {--}}
{{--                var $el = $(this);--}}

{{--                var $input = $('<input class="text-left w-full rounded-lg border border-gray-400 p-2"/>').val("{{$title}}");--}}
{{--                $el.replaceWith($input);--}}

{{--                var save = function(){--}}
{{--                    var $p = $('<p data-editable class="w-full text-sm text-grey-darkest" />').text($input.val());--}}
{{--                    $input.replaceWith($p);--}}
{{--                }--}}

{{--                $input.one('blur', save).focus();--}}
{{--            });--}}

{{--        </script>--}}

