<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Syriana - Discover the Beauty of Syria</title>
    @vite('resources/css/app.css')
    @livewireStyles
</head>
<body class="bg-gray-50 text-gray-800 antialiased">
    <!-- Navbar -->
    <nav class="bg-white shadow-md fixed top-0 left-0 right-0 z-50">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold text-rose-600">Syriana</h1>
            <div class="space-x-6">
                <a href="#" class="text-gray-700 hover:text-rose-600 font-medium">Home</a>
                <a href="#" class="text-gray-700 hover:text-rose-600 font-medium">Places</a>
                <a href="#" class="text-gray-700 hover:text-rose-600 font-medium">Guides</a>
                <a href="#" class="text-gray-700 hover:text-rose-600 font-medium">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <main class="pt-20">
        {{ $slot }}
    </main>

    @livewireScripts
</body>
</html>
