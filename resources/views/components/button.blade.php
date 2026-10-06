@props(['variant' => 'primary'])

<button {{ $attributes->merge(['type' => 'button'])->class([
    'inline-flex items-center justify-center gap-2 rounded-lg px-4 py-2 text-sm font-semibold shadow-xs transition-colors',
    'focus-visible:outline-2 focus-visible:outline-offset-2',
    'disabled:cursor-not-allowed disabled:opacity-50',
    'bg-brand-600 text-white hover:bg-brand-700 focus-visible:outline-brand-600 disabled:hover:bg-brand-600' => $variant === 'primary',
    'bg-white text-zinc-900 ring-1 ring-zinc-300 ring-inset hover:bg-zinc-50 focus-visible:outline-zinc-500 disabled:hover:bg-white' => $variant === 'secondary',
    'bg-red-600 text-white hover:bg-red-700 focus-visible:outline-red-600 disabled:hover:bg-red-600' => $variant === 'danger',
]) }}>
    {{ $slot }}
</button>
