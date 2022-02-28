<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;

    // protected $keyType = 'string';

    // protected static function booted()
    // {
    //     static::creating(fn(Post $post) => $post->id = Str::uuid());
    // }
    public function animal()
    {
        return $this->hasOne(Animal::class, 'post', 'id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'author', 'id');
    }
}
