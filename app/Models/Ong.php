<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Ong extends Model
{
    use HasFactory;

    protected static function booted()
    {
        static::creating(fn(Ong $ong) => $ong->id = Str::uuid());
    }

    public function address()
    {
        return $this->hasOne(Address::class, 'user_id', 'id');
    }
}
