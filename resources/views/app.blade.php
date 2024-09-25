<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('partials.head')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <body data-bs-theme="dark">
        {!! $header !!}  {{-- Mostrar el HTML renderizado del header --}}
        <div class="slider">
            {!! $content !!} {{-- Mostrar el HTML renderizado del content --}}
        </div>
        {!! $footer !!} {{-- Mostrar el HTML renderizado del footer --}}
    </body>
</html>
<style>
     /* Contenedor del contenido */
     .slider {
      opacity: 0;
      transform: translateX(100%); /* Comienza fuera de la pantalla a la derecha */
      animation: deslizamiento 1.5s ease-out forwards;
      border-radius: 10px;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    /* Definición de la animación */
    @keyframes deslizamiento {
      to {
        transform: translateX(0); /* Se posiciona en su lugar original */
        opacity: 1; /* Hace visible el contenido */
      }
    }
</style>