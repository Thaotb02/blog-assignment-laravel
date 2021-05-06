<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        //
        'content'=>$faker->realText(),
        'is_active'=>$faker->boolean(),
        'post_id'=>$faker->numberBetween(1,20),
        'user_id'=>$faker->numberBetween(1,20),
    ];
});