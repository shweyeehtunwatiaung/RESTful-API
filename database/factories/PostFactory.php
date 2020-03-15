<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
   /*  return [
        'title' => $faker->title,
        'content' => $faker->paragraph,
        'user_id' => factory(App\User::class),
    ]; */

    return [
        'title' => $faker->text(10),
        'content' => $faker->text(1000),
        'user_id' => rand(1, 5),
    ];
});
