<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('categories')->insert($this->getData());
    }
    protected function getData():array {
        $faker = Factory::create('ru_RU');
        $data = [];
        for ($i=0; $i <10; $i++) {
            $data[] = [
                'title' => $faker->company(),
                'description' => $faker->Realtext(mt_rand(100, 150)),
                'is_visible' => $faker->boolean()
            ];
        }
        return $data;
    }
}
