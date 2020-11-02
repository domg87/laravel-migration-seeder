<?php

use Illuminate\Database\Seeder;
use App\Comic;
use Faker\Generator as Faker; 

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 30; $i++) {

            $newComic = new Comic();
            $newComic->title = $faker->text(30);
            $newComic->original_title = $faker->text(50);
            $newComic->author = $faker->name();
            $newComic->number = $faker->numberBetween(1, 1000);
            $newComic->n_page = $faker->numberBetween(50, 400);
            $newComic->edition = $faker->company();
            $newComic->price = $faker->randomFloat(2, 1, 1000);
            $newComic->color = rand(0,1);
            $newComic->release = $faker->year();
            $newComic->cover = $faker->imageUrl($width = 150, $height = 300);

            $newComic->save();
        }
    }
}
