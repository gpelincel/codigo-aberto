<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Código Aberto</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/bdcc87c8b0.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
    @stack('styles')
</head>

<body>
    <x-navbar></x-navbar>
    <main class="bg-ocean-900">
        {{ $slot }}
    </main>
    <x-footer></x-footer>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const toggle = document.getElementById('menu-toggle');
            const menu = document.getElementById('mobileMenu');
    
            if (toggle && menu) {
                toggle.addEventListener('click', () => {
                    menu.classList.toggle('hidden');
                });
            }
        });
    </script>

    @stack('scripts')
</body>

</html>
