<?php

namespace Tests\Feature;

use Tests\TestCase;

class PageTest extends TestCase
{
    public function test_home_page_is_served_from_the_root_url(): void
    {
        $this->get('/')
            ->assertOk()
            ->assertSee('WELCOME TO FINDORA');
    }

    public function test_old_home_url_redirects_to_the_root_url(): void
    {
        $this->get('/home')->assertRedirect('/');
    }

    public function test_product_page_renders(): void
    {
        $this->get(route('product'))
            ->assertOk()
            ->assertSee('FINDORA COLLECTION');
    }

    public function test_testimonial_page_renders(): void
    {
        $this->get(route('testimoni'))
            ->assertOk()
            ->assertSee('WHAT THEY SAY');
    }

    public function test_contact_page_renders(): void
    {
        $this->get(route('contact'))
            ->assertOk()
            ->assertSee('STAY CONNECTED');
    }

    public function test_navigation_marks_the_current_page_as_active(): void
    {
        $this->get(route('contact'))
            ->assertOk()
            ->assertSee('class="active"', escape: false);
    }
}
