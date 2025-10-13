<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;
use Livewire\WithPagination;

class HomePage extends Component
{
    public function render()
    {

        // Just preview 9 posts
        $posts = Post::with('user')->latest()->take(9)->get();

        return view('livewire.home-page', [
            'posts' => $posts,
        ]);
    }
}
