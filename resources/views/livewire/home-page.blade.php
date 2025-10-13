<div>
    <!-- Hero Section -->
    <section class="relative bg-cover bg-center h-[85vh]" style="background-image: url('https://images.unsplash.com/photo-1550510537-89d543bb9c8c?auto=format&fit=crop&w=1400&q=80');">
        <div class="absolute inset-0 bg-black bg-opacity-70 flex items-center justify-center">
            <div class="text-center text-white px-6">
                <h1 class="text-5xl font-extrabold mb-4 text-orange-500">Discover the Beauty of Syria</h1>
                <p class="text-lg mb-6 text-gray-200">Explore ancient cities, breathtaking landscapes, and hidden gems with local guides.</p>
                <button class="bg-orange-600 hover:bg-orange-700 px-6 py-3 rounded-lg font-semibold text-white transition-all shadow-lg hover:scale-105">
                    Start Exploring
                </button>
            </div>
        </div>
    </section>

    <!-- Featured Places -->
    <section class="py-16 bg-black">
        <div class="max-w-6xl mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-10 text-orange-500">Top Destinations</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                @foreach ([
                    ['name' => 'Palmyra', 'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/a9/Palmyra_Bel_Temple_01.jpg/640px-Palmyra_Bel_Temple_01.jpg'],
                    ['name' => 'Aleppo Citadel', 'image' => 'https://upload.wikimedia.org/wikipedia/commons/8/8d/Aleppo_Citadel_2016.jpg'],
                    ['name' => 'Damascus Old City', 'image' => 'https://upload.wikimedia.org/wikipedia/commons/1/1b/Damascus_Umayyad_Mosque_2016.jpg'],
                ] as $place)
                    <div class="bg-gray-900 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition transform hover:scale-105 hover:border-2 hover:border-orange-500">
                        <img src="{{ $place['image'] }}" class="w-full h-56 object-cover transition-transform duration-300 hover:scale-110" alt="{{ $place['name'] }}">
                        <div class="p-4">
                            <h3 class="text-lg font-bold text-orange-500">{{ $place['name'] }}</h3>
                            <p class="text-gray-300 text-sm mt-2">A must-visit destination filled with history and charm.</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-20 bg-black text-center text-white">
        <h2 class="text-3xl font-bold mb-4 text-orange-500">Are you a local guide?</h2>
        <p class="mb-6 text-lg text-gray-300">Join Syriana and share your knowledge with travelers from around the world.</p>
        <button class="bg-orange-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-orange-700 transition shadow-lg hover:scale-105">
            Join Now
        </button>
    </section>
</div>