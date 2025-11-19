<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionSys</title>
    <link rel="icon" type="image/png" href="{{ asset('images/favicon.ico') }}" />
    <script src="//unpkg.com/alpinejs" defer></script>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <x-header />

    <main>
        {{ $slot }}
    </main>

    <x-footer />

</body>

</html>
