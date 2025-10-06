<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Place extends Model
{
    use HasFactory;

    protected $fillable = ['place_id', 'name', 'address', 'meta'];

    protected $casts = [
        'meta' => 'array',
    ];
}
