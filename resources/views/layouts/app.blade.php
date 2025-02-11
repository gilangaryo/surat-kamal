<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <link rel="icon" href="{{ asset('css/favicon.jpg') }}">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/css/app.css')

    @livewireStyles
</head>
<body class="antialiased">
    <div class="min-h-screen bg-gray-100">
        @yield('content')
    </div>

    @livewireScripts
    @vite('resources/js/app.js')
</body>
</html>
