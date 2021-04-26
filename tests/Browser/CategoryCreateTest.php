<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class CategoryCreateTest extends DuskTestCase
{
    use RefreshDatabase;

    public function testCreateCategorySuccess()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/admin/categories/create')
                ->type('title', 'test')
                ->type('description', 'testText')
                ->assertButtonEnabled('Сохранить')
                ->press('Сохранить')
                ->assertPathIs('/admin/categories');
        });
    }

    public function test2Example()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/admin/categories/create')
                ->type('title', '')
                ->type('description', 'testText')
                ->press('Сохранить')
                ->assertPathIs('/admin/categories/create')
                ->assertSee(__('Поле Заглавие необходимо заполнить.'));
        });
    }
}
