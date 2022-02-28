<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = User::factory()->create();
        $address = Address::factory()->create(['user_id' => $user->id]);
    }
}
