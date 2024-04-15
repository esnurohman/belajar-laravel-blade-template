<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IncludeTest extends TestCase
{
    public function testInclude()
    {
        $this->view("include", [])
        ->assertSeeText("ESNUROHMAN")
        ->assertSeeText("Selamat Datang di Web")
        ->assertSeeText("Hallo World!");

        $this->view("include", ["title" => "Esnur"])
        ->assertSeeText("Esnur")
        ->assertSeeText("Selamat Datang di Web")
        ->assertSeeText("Hallo World!");
    }
}