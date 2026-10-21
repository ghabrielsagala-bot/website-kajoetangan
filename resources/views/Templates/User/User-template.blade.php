<!-- Ini Bisa Di-rename -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"/>
    @stack('styles')
    <style>
        .font-body { font-family: 'Inter', sans-serif; }
        .font-display { font-family: 'Playfair Display', serif; }
    </style>
    <title>@yield('title')</title>
</head>
<body class="min-h-screen flex flex-col">
    @include('components.user.navbar')
    <div class="flex-grow">
        @yield('body')
    </div>
    @include('components.user.footer')
</body>
</html>