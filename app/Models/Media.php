<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $fillable = ['media_path', 'type'];

    public function mediable()
    {
        return $this->morphTo();
    }

}
