<?php

namespace App\Livewire;
use Livewire\WithPagination;
use App\Models\Post;


use Livewire\Component;

class PostComposer extends Component
{
    use WithPagination;

    public $perPage = 9;

    protected $listeners = ['load-more' => 'loadMore'];

    public function loadMore()
    {
        $this->perPage += 9;
    }


    public function render()
    {
        $posts = Post::with('user')->latest()->take($this->perPage)->get();

        return view('livewire.post-composer', [
            'posts' => $posts,
        ]);
    }

}
