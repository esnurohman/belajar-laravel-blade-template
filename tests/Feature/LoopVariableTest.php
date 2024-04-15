<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoopVariableTest extends TestCase
{
    public function testIterationLoop()
    {
        $this->view("loop-variable", ["hobbies" => ["Gaming", "Coding"]])
        ->assertSeeText("1. Gaming")
        ->assertSeeText("2. Coding");
    }

    public function testIndexLoop()
    {
        $this->view("loop-variable", ["hobbies" => ["Gaming", "Coding"]])
        ->assertSeeText("0. Gaming")
        ->assertSeeText("1. Coding");
    }
}