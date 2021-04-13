<form method="POST" action="{{ $action }}" onsubmit="$message">
    @csrf
    @method($method ?? 'POST')
    <button
        type="submit"
        class="btn {{ $class ?? '' }}"
    >
        {{ $slot }}
    </button>
</form>
