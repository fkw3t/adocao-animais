<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Address extends Model
{
    protected static function booted()
    {
        static::creating(fn(Address $address) => $address->id = Str::uuid());
    }

    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function ong()
    {
        return $this->belongsTo(Ong::class);
    }
}
