<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'content'=>$faker->sentence,
        'author_id'=>$faker->numberBetween(1,100),
        'post_id'=>$faker->numberBetween(1,1500),
    ];
});
