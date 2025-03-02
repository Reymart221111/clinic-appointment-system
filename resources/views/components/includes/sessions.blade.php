@if (session()->has('success') || session()->has('error'))

@php
    $type = session()->has('success') ? 'success' : 'error';
    $message = session()->get($type);
@endphp

<div class="alert alert-{{ $type }} alert-dismissible fade show" role="alert">
    {{ $message }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

@endif