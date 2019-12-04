<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Faker\Generator as Faker;
use Illuminate\Support\Str;


$factory->define(Post::class, function (Faker $faker) {
    $userIds = User::all()->pluck('id')->toArray();
    $categoryIds = Category::all()->pluck('id')->toArray();
    return [
        'title' =>$faker->sentence(),
        'content'=>$faker->text($maxNbChars = 100),
        'user_id' => $faker->randomElement($userIds),
        'category_id' => $faker->randomElement($categoryIds),

    ];
});
