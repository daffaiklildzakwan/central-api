@props([
    'icon' => 'cil-paperclip'
])

<div class="card-header">
    <i class="{{ $icon }}"></i> {{ $slot }}
</div>
