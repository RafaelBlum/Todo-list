@props([
    'type'
])


<div {{$attributes->class([
    'w-80 text-center text-sm mb-2 font-semibold tracking-wide cursor-pointer',
    'text-yellow-500' => $type == 'warning',
    'text-red-500' => $type == 'error',
    'text-green-500' => $type == 'success',
    'text-indigo-500' => $type == 'info',
])}} >
    {{$slot}}
</div>