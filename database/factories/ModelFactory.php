<?php

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Radio::class, function (Faker\Generator $faker) {
    return [
        'programa' => $faker->slug,
        'conductor' => $faker->name,
        'estacion' => '123.12',
        'horario' => str_random(10),
        'cobertura' => str_random(10),
        'comentario' => $faker->text
    ];
});