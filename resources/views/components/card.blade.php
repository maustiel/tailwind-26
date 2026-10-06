<article {{ $attributes->class([
    'overflow-hidden rounded-xl border border-zinc-200 bg-white shadow-xs',
]) }}>
    @isset($image)
        {{ $image }}
    @endisset

    <div class="p-5">
        {{ $slot }}
    </div>
</article>
