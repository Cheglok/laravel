<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('news')->insert($this->getData());
    }
    protected function getData():array {
        $faker = Factory::create('ru_RU');
        $data = [];
        for ($i=0; $i <30; $i++) {
            $title = $faker->sentence ;
            $slug = Str::slug($title);
            $data[] = [
                'category_id' => rand(1, 10),
                'title' => $title,
                'slug' => $slug,
                'text' => $faker->realText(mt_rand(100, 150)),
                'status' => $faker->randomElement(['draft', 'published', 'blocked']),
                'source_id' => rand(1, 7),
                'created_at' => $faker->date()
            ];
        }
        return $data;
    }
}
