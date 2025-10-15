<div>
    <!-- Hero Section -->
    <section class="relative bg-cover bg-center h-[85vh]"
        style="background-image: url('https://images.unsplash.com/photo-1550510537-89d543bb9c8c?auto=format&fit=crop&w=1400&q=80');">
        <div class="absolute inset-0 bg-black bg-opacity-70 flex items-center justify-center">
            <div class="text-center text-white px-6">
                <h1 class="text-5xl font-extrabold mb-4 text-orange-500">Discover the Beauty of Syria</h1>
                <p class="text-lg mb-6 text-gray-200">Explore ancient cities, breathtaking landscapes, and hidden gems
                    with local guides.</p>
                <a href="{{ route('posts.index') }}"
                    class="bg-orange-600 hover:bg-orange-700 px-6 py-3 rounded-lg font-semibold text-white transition-all shadow-lg hover:scale-105">
                    Start Exploring
                </a>
            </div>
        </div>
    </section>

    <!-- Posts Preview -->
    <section class="py-16 bg-black">
        <div class="max-w-6xl mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-10 text-orange-500">Latest Posts</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                @foreach ($posts as $post)
                    <div
                        class="bg-gray-900 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition transform hover:scale-105 hover:border-2 hover:border-orange-500">
                        @if ($post->media_path)
                            <img src="{{ asset('storage/' . $post->media_path) }}"
                                class="w-full h-56 object-cover transition-transform duration-300 hover:scale-110"
                                alt="{{ $post->title ?? 'Post media' }}">
                        @endif
                        <div class="p-4">
                            <h3 class="text-lg font-bold text-orange-500">{{ $post->title ?? 'Untitled Post' }}</h3>
                            <p class="text-gray-300 text-sm mt-2">{{ Str::limit($post->caption, 100) }}</p>
                            <div class="mt-4 flex items-center justify-between text-xs text-gray-400">
                                <span>By {{ $post->user?->name ?? 'Unknown' }}</span>
                                <span>{{ $post->created_at->diffForHumans() }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- View More Button -->
            <div class="mt-10 text-center">
                <a href="{{ route('posts.index') }}"
                    class="bg-orange-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-orange-700 transition shadow-lg hover:scale-105">
                    View More
                </a>
            </div>
        </div>
    </section>
    <div>
        <!-- existing homepage content -->

        <!-- Floating + button -->
        <button wire:click="$set('showCreateModal', true)"
            class="fixed bottom-6 right-6 bg-orange-600 hover:bg-orange-700 text-white text-3xl font-bold w-14 h-14 rounded-full shadow-lg flex items-center justify-center transition transform hover:scale-110 z-50">
            +
        </button>

        <!-- Modal -->
        @if ($showCreateModal)
            <div class="fixed inset-0 bg-black bg-opacity-70 flex items-center justify-center z-50">
                <div class="bg-gray-900 rounded-xl shadow-xl w-full max-w-lg p-6 relative">
                    <!-- Close button -->
                    <button wire:click="$set('showCreateModal', false)"
                        class="absolute top-3 right-3 text-gray-400 hover:text-white text-xl">&times;</button>

                    @livewire('create-post-composer')
                </div>
            </div>
        @endif
    </div>
</div>
