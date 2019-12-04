<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;


$factory->define(Comment::class, function (Faker $faker) {
    $userIds = User::all()->pluck('id')->toArray();
    $postIds = Post::all()->pluck('id')->toArray();
    return [
        'post_id' => $faker->randomElement($postIds),
        'content' =>$faker->name,
        'user_id' => $faker->randomElement($userIds),
        'is_active'=>$faker->boolean(true,false),
    ];
});
