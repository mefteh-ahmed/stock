<?php

use Faker\Generator as Faker;

$factory->define(App\Categorie::class, function (Faker $faker) {
    return [
        //
        'libelle' =>$faker->text(50),
    ];
});
