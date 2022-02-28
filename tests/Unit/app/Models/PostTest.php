<?php

namespace Tests\Unit\app\Models;

use App\Models\Animal;
use App\Models\Post;
use App\Models\User;
use Tests\TestCase;

class PostTest extends TestCase
{
    public function testPostShouldHaveUser()
    {
        $user = User::factory()->create();
        $animal = Animal::factory()->create(['owner' => $user->id]);
        $post = Post::factory()->create(['author' => $user->id, 'animal' => $animal->id]);
        // completing animal
        $animal->post = $post->id;
        $animal->save();

        $this->assertEquals(1, $post->user()->count());
        $this->assertInstanceOf(User::class, $post->user);
    }
}
