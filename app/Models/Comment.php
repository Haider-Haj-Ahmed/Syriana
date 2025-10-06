<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Post;
use App\Models\User;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'post_id', 'body', 'parent_id'];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    // الردود التابعة للتعليق
    public function replies()
    {
        return $this->hasMany(Comment::class, 'parent_id');
    }

    // التعليق الأب
    public function parent()
    {
        return $this->belongsTo(Comment::class, 'parent_id');
    }
}
