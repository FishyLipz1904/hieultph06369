<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Blog;
use App\Models\User;
use Faker\Generator as Faker;

$factory->define(Blog::class, function (Faker $faker) {
    $userIds = User::all()->pluck('id')->toArray();
    return [
        'user_id' => $faker->randomElement($userIds),
        'title'=>$faker->name,
        'content'=>$faker->text($maxNbChars = 50),

    ];
});

