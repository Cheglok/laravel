<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class NewsCreateTest extends DuskTestCase
{
    use RefreshDatabase;

    public function testCreateNewsSuccess()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/admin/news/create')
                ->type('title', 'test')
                ->type('text', 'testText')
                ->assertButtonEnabled('Сохранить')
                ->press('Сохранить')
                ->assertPathIs('/admin/news/create');
        });
    }

    public function test2Example()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/admin/news/create')
                ->type('title', '')
                ->type('text', 'testText')
                ->press('Сохранить')
                ->assertPathIs('/admin/news/create')
                ->assertSee(__('Поле наименование обязательно для заполнения.'));
        });
    }
}
