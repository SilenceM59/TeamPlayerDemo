<?php

use App\Data\Models\Team\Player;
use Faker\Generator as Faker;

$factory->define(Player::class, function(Faker $faker)
{
    return [
        'first_name' => $faker->firstName,
        'last_name'  => $faker->lastName,
    ];
});
