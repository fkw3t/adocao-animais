<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Ong extends Authenticatable
{
    use HasFactory;

    protected $guard = 'ong';

    protected $fillable = [
        'id',
        'name',
        'email',
    ];

    protected $hidden = [
        'password'
    ];

    // protected $keyType = 'string';

    // protected static function booted()
    // {
    //     static::creating(fn(Ong $ong) => $ong->id = Str::uuid());
    // }
    public function address()
    {
        return $this->hasOne(Address::class, 'user_id', 'id');
    }
}
