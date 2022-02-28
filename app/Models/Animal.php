<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Animal extends Model
{
    use HasFactory;

    // protected $keyType = 'string';

    // protected static function booted()
    // {
    //     static::creating(fn(Animal $animal) => $animal->id = Str::uuid());
    // }
    public function user()
    {
        return $this->belongsTo(User::class, 'owner', 'id');
    }
    public function post()
    {
        return $this->belongsTo(Post::class, 'post', 'id');
    }
}
