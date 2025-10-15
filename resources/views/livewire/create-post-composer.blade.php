<div class="bg-gray-900 p-6 rounded-lg shadow-lg">
    @if (session()->has('message'))
        <div class="mb-4 text-green-500">{{ session('message') }}</div>
    @endif

    <form wire:submit.prevent="save" enctype="multipart/form-data">
        <input type="text" wire:model="title" placeholder="Title"
               class="w-full mb-3 p-2 rounded bg-gray-800 text-white">

        <textarea wire:model="caption" placeholder="Write a caption..."
                  class="w-full mb-3 p-2 rounded bg-gray-800 text-white"></textarea>

        <input type="file" wire:model="media" class="mb-3 text-gray-300">

        @error('media') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror

        @if ($media)
            <div class="mb-3">
                <p class="text-gray-400 text-sm">Preview:</p>
                <img src="{{ $media->temporaryUrl() }}" class="w-48 rounded">
            </div>
        @endif

        <button type="submit"
                class="bg-orange-600 hover:bg-orange-700 px-4 py-2 rounded text-white font-semibold">
            Post
        </button>
    </form>
</div>