@props(['status'])

<span @class([
    'inline-flex items-center rounded-full px-2.5 py-0.5 text-xs font-medium whitespace-nowrap ring-1 ring-inset',
    'bg-sky-50 text-sky-700 ring-sky-600/20' => $status === 'ongoing',
    'bg-red-50 text-red-700 ring-red-600/20' => $status === 'overdue',
    'bg-zinc-100 text-zinc-600 ring-zinc-500/20' => $status === 'returned',
])>
    {{ $slot }}
</span>
