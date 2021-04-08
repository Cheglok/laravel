<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class NewsTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_show_news_list()
    {
        $response = $this->get('/news');

        $response->assertStatus(200);
    }
    public function test_show_one_news() {
        $id = mt_rand(1, 16);
        $response = $this->get('/news/show/' . $id);
        $response->assertStatus(200);
        $response->assertSeeText('подробно');
        $response->assertSessionHasNoErrors();
    }

    public function test_show_categories()
    {
        $response = $this->get('/news/categories');
        $response->assertSuccessful();
    }

    public function test_show_user_forms()
    {
        $response = $this->get('/user');
        $response->assertDontSeeText('матерные слова');
    }

    public function test_show_admin_news()
    {
        $response = $this->get('/admin/news');
        $response->assertCookieMissing('userName');
    }

    public function test_show_admin_categories()
    {
        $response = $this->get('/admin/categories');
        $response->assertCookieNotExpired('laravel_session');
    }

}
