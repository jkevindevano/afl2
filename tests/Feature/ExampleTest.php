<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_home_page_renders(): void
    {
        $response = $this->get('/home');

        $response->assertStatus(200);
        $response->assertSee('WELCOME TO FINDORA');
    }

    public function test_product_page_renders(): void
    {
        $response = $this->get('/product');

        $response->assertStatus(200);
        $response->assertSee('FINDORA COLLECTION');
    }

    public function test_contact_page_renders(): void
    {
        $response = $this->get('/contact');

        $response->assertStatus(200);
        $response->assertSee('STAY CONNECTED');
    }
}
