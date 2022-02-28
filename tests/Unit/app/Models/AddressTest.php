<?php

namespace Tests\Unit\app\Models;

use App\Models\Address;
use App\Models\User;
use Tests\TestCase;

class AddressTest extends TestCase
{
    public function testAddressShouldHaveUser()
    {
        $user = User::factory()->create();
        $address = Address::factory()->create(['user_id' => $user->id]);
        
        $this->assertInstanceOf(User::class, $address->user);
    }
}
