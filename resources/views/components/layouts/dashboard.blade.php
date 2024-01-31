<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>

        <link href="{{ asset('build/assets/app.css') }}" rel="stylesheet">
        <link href="{{ asset('build/assets/dashboard.css') }}" rel="stylesheet">
    </head>
    <body>
        <main class="mb-dashboard">{{ $slot }}</main>
        <nav class="mb-nav" aria-label="navegar entre a aplicação">
            <ul class="mb-nav__list">
                <li class="mb-nav__item">
                    <a href="/dashboard" wire:navigate class="mb-nav__link" title="Dashboard">
                        <figure class="mb-nav__figure">
                            <img src="{{ asset('imgs/logo.png') }}" class="mb-nav__img" alt="Mb logo"/>
                        </figure>
                    </a>
                </li>
                <li class="mb-nav__item">
                    <a href="/profile"  wire:navigate
                        class="mb-nav__link" title="Perfil">
                        <span class="mb-nav__span">Perfil</span>
                    </a>
                </li>
            </ul>
        </nav>
    </body>
</html>
<script src="{{ asset('build/assets/index6.js') }}"></script>
