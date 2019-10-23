<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Category;
use App\Models\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;


$factory->define(Category::class, function (Faker $faker) {
    $userIds = User::all()->pluck('id')->toArray();
    return [
        'user_id' => $faker->randomElement($userIds),
        'name'=>$faker->name,

    ];
});
