<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker){
    return [];           
});

$factory->defineAs(App\User::class, 'patient', function (Faker\Generator $faker){
    return [
        'role' => 'patient',
        'email' => $faker->freeEmail,
        'password' => bcrypt(str_random(10)),
        'photo' => 'nada',
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'birthday' => $faker->date('Y-m-d','1996-01-01'),
        'gender' => $faker->randomElement(['masculine','feminine']),
        'phone' => $faker->phoneNumber,
        'street' => $faker->streetName,
        'number' => $faker->randomNumber(3),
        'neighborhood' => $faker->stateAbbr,
        'zip_code' => $faker->postcode,
        'city' => $faker->city,
        'state' => $faker->state,
        'country' => $faker->country,
        'remember_token' => str_random(10)
    ];           
});

$factory->defineAs(App\User::class, 'nutritionist', function (Faker\Generator $faker) {
    return [
        'role' => 'nutritionist',
        'email' => $faker->freeEmail,
        'password' => bcrypt('222222'),
        'photo' => '',
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'birthday' => $faker->date('Y-m-d','1996-01-01'),
        'gender' => $faker->randomElement(['masculine','feminine']),
        'phone' => $faker->phoneNumber,
        'street' => $faker->streetName,
        'number' => $faker->randomNumber(3),
        'neighborhood' => $faker->stateAbbr,
        'zip_code' => $faker->postcode,
        'city' => $faker->city,
        'state' => $faker->state,
        'country' => $faker->country,
        'remember_token' => str_random(10)
    ];           
});

$factory->define(App\NutritionistFile::class, function (Faker\Generator $faker) {
    return [
        'reviews' => $faker->numberBetween(1,100),
        'score' => $faker->numberBetween(1,500),
        'ranking' => $faker->randomFloat(2,1,5),
        'grade' => 'Lic. Nutrición',
        'license' => $faker->bothify('?#?#?#?#?#?#'),
        'speciality' => $faker->company,
        'about_me' => $faker->realText(100,2),
        'office_phone' => $faker->phoneNumber,
        'mon' => $faker->boolean,
        'tue' => $faker->boolean,
        'wed' => $faker->boolean,
        'thu' => $faker->boolean,
        'fri' => $faker->boolean,
        'sat' => $faker->boolean,
        'sun' => $faker->boolean, 
        'initial_hour' => $faker->time,
        'final_hour' => $faker->time
    ];           
});
