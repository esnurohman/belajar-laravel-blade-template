<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HelloTest extends TestCase
{
    
    public function testHello()
    {
        $this->get('/hello')
            ->assertSeeText('Esnur');

    }
    public function testHelloWorld()
    {
        $this->get('/world')
            ->assertSeeText('Nurohman');

    }

    public function testHelloView()
    {
        $this->get('hello', [
            "name" => "Esnur"
        ])
            ->assertSeeText('Esnur');

    }
    public function testHelloWorldView()
    {
        $this->get('hello.world', [
            "name" => "Nurohman"
        ])
            ->assertSeeText('Nurohman');

    }
}