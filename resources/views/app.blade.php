<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('partials.head')
    <body data-bs-theme="dark">
        {!! $header !!}  {{-- Mostrar el HTML renderizado del header --}}
        {!! $content !!} {{-- Mostrar el HTML renderizado del content --}}
    </body>
</html>
