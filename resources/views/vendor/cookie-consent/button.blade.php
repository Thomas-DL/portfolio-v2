<form action="{!! $url !!}" {!! $attributes !!}>
    @csrf
    <button type="submit" class="rounded-full bg-black py-2.5 px-4 text-white w-full">
        <span class="{!! $basename !!}__label">{{ $label }}</span>
    </button>
</form>
