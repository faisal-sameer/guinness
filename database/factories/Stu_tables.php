<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Stu_tables;
use Faker\Generator as Faker;

$factory->define(Stu_tables::class, function (Faker $faker) {
    return [
        'school_name'=>$faker->sentence(),
        'stu_name'=>$faker->sentence(),
    ];
});
