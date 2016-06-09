<?php

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name'           => $faker->name,
        'email'          => $faker->safeEmail,
        'password'       => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Radio::class, function (Faker\Generator $faker) {
    return [
        'programa'   => 'Programa',
        'conductor'  => $faker->name,
        'estacion'   => '123.12',
        'horario'    => 'vespertino',
        'cobertura'  => 'valles centrales',
        'comentario' => 'lorem imsum ...'
    ];
});

$factory->define(App\Tv::class, function (Faker\Generator $faker) {
    return [
        'programa'   => 'Programa',
        'conductor'  => $faker->name,
        'canal'      => 5,
        'horario'    => 'temprano',
        'cobertura'  => 'oaxaca de juarez',
        'comentario' => 'lorem imsum'
    ];
});