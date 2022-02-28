<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Str;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $guard = 'user';

    protected $fillable = [
        'id',
        'name',
        'email'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    // protected static function booted()
    // {
    //     static::creating(fn(User $user) => $user->id = (string) Str::uuid());
    // }
    public function address()
    {
        return $this->hasOne(Address::class, 'user_id', 'id');
    }    
    public function posts()
    {
        return $this->hasMany(Post::class, 'author', 'id');
    }
    public function animals()
    {
        return $this->hasMany(Animal::class, 'owner', 'id');
    }
}
