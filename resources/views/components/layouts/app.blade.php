<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>

        <link href="{{ asset('build/assets/app.css') }}" rel="stylesheet">
        <link href="{{ asset('build/assets/auth.css') }}" rel="stylesheet">
    </head>
    <body>

        <main class="mb-auth">
            <div class="mb-auth__logo">
                <img src="{{ asset('imgs/logo.png') }}" class="mb-auth__img" alt="Mb logo"/>
            </div>
            {{ $slot }} 
        </main>
    </body>
</html>
