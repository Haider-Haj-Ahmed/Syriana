<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Syriana - Discover the Beauty of Syria</title>
    @vite('resources/css/app.css')
    @livewireStyles
</head>

<body class="bg-black text-gray-200 antialiased">
    <!-- Navbar -->
    <nav class="bg-gray-900 shadow-md fixed top-0 left-0 right-0 z-50 border-b border-orange-600">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold text-orange-500 tracking-wide">Syriana</h1>
            <div class="space-x-6">
                <a href="#"
                    class="relative text-gray-300 hover:text-orange-500 font-medium transition-colors 
                    after:content-[''] after:absolute after:left-0 after:-bottom-1 after:w-0 after:h-[2px] 
                    after:bg-orange-500 after:transition-all after:duration-300 hover:after:w-full">
                    Home
                </a>

                <a href="#"
                    class="relative text-gray-300 hover:text-orange-500 font-medium transition-colors 
                    after:content-[''] after:absolute after:left-0 after:-bottom-1 after:w-0 after:h-[2px] 
                    after:bg-orange-500 after:transition-all after:duration-300 hover:after:w-full">
                    Places
                </a>

                <a href="#"
                    class="relative text-gray-300 hover:text-orange-500 font-medium transition-colors 
                    after:content-[''] after:absolute after:left-0 after:-bottom-1 after:w-0 after:h-[2px] 
                    after:bg-orange-500 after:transition-all after:duration-300 hover:after:w-full">
                    Guides
                </a>

                <a href="#"
                    class="relative text-gray-300 hover:text-orange-500 font-medium transition-colors 
                    after:content-[''] after:absolute after:left-0 after:-bottom-1 after:w-0 after:h-[2px] 
                    after:bg-orange-500 after:transition-all after:duration-300 hover:after:w-full">
                    Contact
                </a>
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