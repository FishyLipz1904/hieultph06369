<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Models\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'birthday' =>$faker->date($format = 'Y-m-d', $max = 'now'),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'phone_number' =>$faker->phoneNumber, 
        'role'=>$faker->numberBetween(1,2),
        'is_active'=>$faker->boolean(true,false),
    ];
});
