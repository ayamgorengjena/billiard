<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'My App')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Flowbite CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white dark:bg-gray-900 text-gray-900 dark:text-white">

    {{-- HEADER --}}
    <header>
        @include('components.header')
    </header>

    {{-- MAIN CONTENT --}}
    <main class="container mx-auto px-4 mt-8">
        @yield('content')
    </main>

    {{-- FOOTER --}}
    <footer class="mt-12 text-center py-4 text-sm text-gray-500 dark:text-gray-400">
        © 2025 Jesica App. All rights reserved.
    </footer>

    <!-- Flowbite JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
</body>
</html>
