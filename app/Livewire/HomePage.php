<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;
use Livewire\WithPagination;

class HomePage extends Component
{
    public $showCreateModal = false;
    public $posts;
    protected $listeners = ['postCreated' => 'refreshPosts'];
    public function mount()
    {
        $this->refreshPosts();
    }
    public function refreshPosts()
    {
        $this->posts = Post::with('user')->latest()->take(9)->get();
    }
    public function render()
    {

        // Just preview 9 posts
        $posts = Post::with('user')->latest()->take(9)->get();

        return view('livewire.home-page', [
            'posts' => $posts,
        ]);
    }
}
