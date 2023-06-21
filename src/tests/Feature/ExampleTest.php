<?php

namespace Tests\Feature;

use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * 基本的なテスト例
     * @test
     */
    public function 接続(): void
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }
}

