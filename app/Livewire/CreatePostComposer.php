<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Post;

class CreatePostComposer extends Component
{
    use WithFileUploads;

    public $title;
    public $caption;
    public $media;

    protected $rules = [
        'title' => 'nullable|string|max:255',
        'caption' => 'nullable|string',
        'media' => 'nullable|image|max:2048',
    ];

    public function save()
    {
        $this->validate();

        $path = null;
        if ($this->media) {
            $path = $this->media->store('posts', 'public');
        }

        Post::create([
            'user_id' => auth()->id(),
            'title' => $this->title,
            'caption' => $this->caption,
            'media_path' => $path,
            'media_type' => $this->media ? 'image' : null,
        ]);

        // Reset form
        $this->reset(['title', 'caption', 'media']);

        // Flash message
        session()->flash('message', 'Post created successfully!');

        // Emit event so HomePage can refresh posts if needed
        $this->dispatch('postCreated');
    }

    public function render()
    {
        return view('livewire.create-post-composer');
    }
}
