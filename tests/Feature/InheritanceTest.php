<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class InheritanceTest extends TestCase
{
    public function testInheritance()
    {
        $this->view("child", [])
        ->assertSeeText("Nama Aplikasi - Halaman Utama")
        ->assertSeeText("Ini Header")
        ->assertSeeText("Ini Konten");
    }

    public function testInheritancWithoutOverride()
    {
        $this->view("child-default", [])
        ->assertSeeText("Nama Aplikasi - Halaman Utama")
        ->assertSeeText("Default Header")
        ->assertSeeText("Default Content")
        ->assertDontSeeText("Ini Header")
        ->assertDontSeeText("Ini Content");
        
    }
}