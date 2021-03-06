<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Address extends Model
{
    use HasFactory;
    
    // protected $keyType = 'string';

    // protected static function booted()
    // {
    //     static::creating(fn(Address $address) => $address->id = Str::uuid());
    // }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function ong()
    {
        return $this->belongsTo(Ong::class);
    }
}
