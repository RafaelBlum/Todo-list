{{--<div>--}}
{{--    --}}{{-- button DELETE --}}
{{--    <button class="middle none center mr-2 ml-4 rounded-lg bg-red-200 px-1 py-0 font-sans text-xs font-bold animate-pulse--}}
{{--                            uppercase shadow-md shadow-red-300/20 transition-all hover:shadow-lg hover:shadow-red-500/40--}}
{{--                            focus:opacity-[0.95] focus:shadow-none active:opacity-[0.85] active:shadow-none--}}
{{--                            disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"--}}
{{--    wire:click="destroy">--}}
{{--        X--}}
{{--    </button>--}}
{{--</div>--}}

<button class="p-1 pt-4 rounded-md text-red-400 flex content-center" wire:click="destroy" type="button" aria-label="delete" title="delete">
    <i class="ri-delete-bin-5-line text-2xl pt-2"></i>
</button>
