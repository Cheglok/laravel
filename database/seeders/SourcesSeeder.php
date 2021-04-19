<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;

class SourcesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('sources')->insert($this->getData());
    }
    protected function getData():array {
        $faker = Factory::create('ru_RU');
        $data=[];
        for($i=0; $i < 10; $i++) {
            $data[] = [
                'title' => $faker->sentence(rand(2, 5)),
                'description' => $faker->realText(rand(100, 200)),
                'url' => $faker->url,
                'is_paid' =>(boolean)rand(0, 1)
            ];
        }
        return $data;
    }
}
