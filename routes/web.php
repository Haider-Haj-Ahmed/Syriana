<?php

use App\Livewire\HomePage;
use App\Livewire\PostComposer;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', HomePage::class)->name('home');
Route::get('/posts', PostComposer::class)->name('posts.index');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
