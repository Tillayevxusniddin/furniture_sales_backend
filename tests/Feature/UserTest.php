<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{

    public function setUp(): void 
    {
        parent::setUp(); // pastdagi yozilgan har bir test uchun run boladi
    }

    public function test_get_all_users(): void
    {
        $response = $this->get('/api/users');

        $response->assertStatus(200);
        $response->assertJson([
            'data' => true
        ]);
    }
}
