@props([
    'type',
    'size' => 'md',
])

<div
    @class([
        'flex select-none items-center justify-center gap-2 rounded-full',
        match ($size) {
            'md' => 'py-2 pl-4 pr-5',
            'sm' => 'py-2.5 pl-4 pr-5 text-xs',
        },
        'bg-purple-100/80 text-purple-700' => $type->color === 'purple',
        'bg-blue-100/80 text-blue-700' => $type->color === 'blue',
        'bg-violet-100/80 text-violet-700' => $type->color === 'violet',
    ])
>
    {{-- Type Icon --}}
    <div
        @class([
            '-my-4',
            'text-purple-700' => $type->color === 'purple',
            'text-blue-500' => $type->color === 'blue',
            'text-violet-500' => $type->color === 'violet',
        ])
    >
        {!! $type->icon !!}
    </div>

    {{-- Type Name --}}
    <div>
        {{ $type->name }}
    </div>
</div>
