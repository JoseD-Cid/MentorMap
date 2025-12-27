<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>{{ $title ?? 'Page Title' }}</title>
</head>

<body class="flex flex-col md:flex-row overflow-hidden h-screen">

    <livewire:components.sidebar />

    <main class="flex-1 relative z-10 overflow-auto">
        {{ $slot }}
    </main>
</body>

</html>
