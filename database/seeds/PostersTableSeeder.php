<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Poster;

class PostersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) {
          $new_poster = new Poster();
          $new_poster->url = $faker->imageUrl();
          $new_poster->album_id = $i + 1;
          $new_poster->save();
        }
    }
}
