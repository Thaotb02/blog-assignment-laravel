<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title'=>$faker->sentence(),
     'content'=>$faker->realText(),
     'image'=>$faker->imageUrl(),
     'user_id'=>$faker->numberBetween(1,20),
     'category_id'=>$faker->numberBetween(1,20),
    ];
});
