<div>
    <!-- Hero Section -->
    <section class="relative bg-cover bg-center h-[85vh]" style="background-image: url('https://images.unsplash.com/photo-1550510537-89d543bb9c8c?auto=format&fit=crop&w=1400&q=80');">
        <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center">
            <div class="text-center text-white px-6">
                <h1 class="text-5xl font-extrabold mb-4">Discover the Beauty of Syria</h1>
                <p class="text-lg mb-6">Explore ancient cities, breathtaking landscapes, and hidden gems with local guides.</p>
                <button class="bg-rose-600 hover:bg-rose-700 px-6 py-3 rounded-lg font-semibold text-white transition-all">Start Exploring</button>
            </div>
        </div>
    </section>

    <!-- Featured Places -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-6xl mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-10">Top Destinations</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                @foreach ([
                    ['name' => 'Palmyra', 'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/a9/Palmyra_Bel_Temple_01.jpg/640px-Palmyra_Bel_Temple_01.jpg'],
                    ['name' => 'Aleppo Citadel', 'image' => 'https://upload.wikimedia.org/wikipedia/commons/8/8d/Aleppo_Citadel_2016.jpg'],
                    ['name' => 'Damascus Old City', 'image' => 'https://upload.wikimedia.org/wikipedia/commons/1/1b/Damascus_Umayyad_Mosque_2016.jpg'],
                ] as $place)
                    <div class="bg-white rounded-2xl overflow-hidden shadow hover:shadow-lg transition">
                        <img src="{{ $place['image'] }}" class="w-full h-56 object-cover" alt="{{ $place['name'] }}">
                        <div class="p-4">
                            <h3 class="text-lg font-bold text-rose-600">{{ $place['name'] }}</h3>
                            <p class="text-gray-600 text-sm mt-2">A must-visit destination filled with history and charm.</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-20 bg-rose-600 text-center text-white">
        <h2 class="text-3xl font-bold mb-4">Are you a local guide?</h2>
        <p class="mb-6 text-lg">Join Syriana and share your knowledge with travelers from around the world.</p>
        <button class="bg-white text-rose-600 px-6 py-3 rounded-lg font-semibold hover:bg-gray-100 transition">Join Now</button>
    </section>
</div>
