<?php

namespace Tests\Unit\app\Models;

use App\Models\Address;
use App\Models\Animal;
use App\Models\Post;
use App\Models\User;
use Tests\TestCase;

class UserTest extends TestCase
{
    // user relationships
    public function testUserShouldHaveAddress()
    {
        $user = User::factory()->create();
        $address = Address::factory()->create(['user_id' => $user->id]);
        
        $this->assertEquals(1, $user->address()->count());
        $this->assertInstanceOf(Address::class, $user->address);
    }
    public function testUserShouldHaveManyPosts()
    {
        $user = User::factory()->create();
        $post1 = Post::factory()->create(['author' => $user->id]);
        $post2 = Post::factory()->create(['author' => $user->id]);

        $this->assertTrue($user->posts->contains($post1 && $post2));
        $this->assertGreaterThanOrEqual(1, $user->posts()->count());
        $this->assertInstanceOf('Illuminate\Database\Eloquent\Collection', $user->posts);
    }
    public function testUserShouldHaveAnimal()
    {
        $user = User::factory()->create();
        $animal = Animal::factory()->create(['owner' => $user->id]);
        $post = Post::factory()->create(['author' => $user->id, 'animal' => $animal->id]);
        // completing animal
        $animal->post = $post->id;
        $animal->save();

        $this->assertTrue($user->animals->contains($animal));
        $this->assertGreaterThanOrEqual(1, $user->animals()->count());
        $this->assertInstanceOf('Illuminate\Database\Eloquent\Collection', $user->animals);
    }
    // user relationships

    
}
