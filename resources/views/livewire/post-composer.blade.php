<div x-data="{
        observe() {
            let observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        $wire.call('loadMore')
                    }
                })
            });
            observer.observe(this.$refs.infiniteScrollTrigger);
        }
    }" x-init="observe">

    <section class="py-16 bg-black min-h-screen">
        <div class="max-w-6xl mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-10 text-orange-500">All Posts</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                @foreach ($posts as $post)
                    <div class="bg-gray-900 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition transform hover:scale-105 hover:border-2 hover:border-orange-500">
                        @if($post->media_path)
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

            <!-- Infinite Scroll Trigger -->
            <div x-ref="infiniteScrollTrigger" class="mt-10 text-center text-gray-400">
                @if ($posts->count() >= $perPage)
                    <span>Loading more...</span>
                @else
                    <span>No more posts</span>
                @endif
            </div>
        </div>
    </section>
</div>  