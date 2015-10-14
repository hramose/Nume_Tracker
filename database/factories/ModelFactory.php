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
        'photo' => '',
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'birthday' => $faker->date('Y-m-d','1996-01-01'),
        'gender' => $faker->randomElement(['masculine','feminine']),
        'phone' => $faker->numerify('##########'),
        'street' => $faker->streetName,
        'number' => $faker->randomNumber(3),
        'neighborhood' => $faker->stateAbbr,
        'zip_code' => $faker->numerify('#####'),
        'city' => $faker->city,
        'state' => $faker->state,
        'country' => $faker->country,
        'remember_token' => str_random(10)
    ];           
});

$factory->define(App\CNHistory::class, function (Faker\Generator $faker) {
    return [
        'ms' => $faker->realText(20,2),
        'oc' => $faker->realText(20,2),
        'sc' => $faker->realText(20,2),
        're' => $faker->realText(20,2),
        'sd' => $faker->realText(20,2),
        'hm' => $faker->realText(20,2),
        'dt' => $faker->realText(20,2),
        'sw' => $faker->realText(20,2),
        'or' => $faker->realText(20,2),
        'ud' => $faker->realText(20,2),
        'wd' => $faker->realText(20,2),
        'ap1' => $faker->boolean,
        'ap2' => $faker->boolean,
        'ap3' => $faker->boolean,
        'ap4' => $faker->boolean,
        'ap5' => $faker->boolean,
        'ap6' => $faker->boolean,
        'ap7' => $faker->boolean,
        'ap8' => $faker->boolean,
        'te' => $faker->realText(20,2),
        'dd' => $faker->realText(20,2),
        'im' => $faker->realText(20,2),
        'usd' => $faker->realText(20,2),
        'whd' => $faker->realText(20,2),
        'swu' => $faker->realText(20,2),
        'sur' => $faker->realText(20,2),
        'obe' => $faker->boolean,
        'can' => $faker->boolean,
        'dia' => $faker->boolean,
        'ahi' => $faker->boolean,
        'hip' => $faker->boolean,
        'hep' => $faker->boolean,
        'fia' => $faker->randomElement(['yes','no']),
        'ext' => $faker->realText(20,2),
        'fre' => $faker->realText(20,2),
        'dur' => $faker->realText(20,2),
        'wst' => $faker->realText(20,2),
        'smo' => $faker->realText(20,2),
        'dal' => $faker->realText(20,2),
        'dco' => $faker->realText(20,2)
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
        'phone' => $faker->numerify('##########'),
        'street' => $faker->streetName,
        'number' => $faker->randomNumber(3),
        'neighborhood' => $faker->stateAbbr,
        'zip_code' => $faker->numerify('#####'),
        'city' => $faker->city,
        'state' => $faker->state,
        'country' => $faker->country,
        'remember_token' => str_random(10)
    ];           
});

$factory->define(App\NutritionistFile::class, function (Faker\Generator $faker) {
    $fakeReviews = 50;
    $fakeScore = 250; //$faker->numberBetween($fakeReviews,$fakeReviews*5);

    return [
        'reviews' => $fakeReviews,
        'score' => $fakeScore,
        'ranking' => round(floatval($fakeScore/$fakeReviews),1),
        'grade' => 'Lic. Nutrición',
        'license' => $faker->bothify('?#?#?#?#?#?#'),
        'speciality' => $faker->realText(20,2),
        'about_me' => $faker->realText(100,2),
        'office_phone' => $faker->numerify('##########'),
        'mon' => $faker->boolean,
        'tue' => $faker->boolean,
        'wed' => $faker->boolean,
        'thu' => $faker->boolean,
        'fri' => $faker->boolean,
        'sat' => $faker->boolean,
        'initial_hour' => $faker->randomElement(['8:00','9:00','10:00']),
        'final_hour' => $faker->randomElement(['18:00','19:00','21:00'])
    ];           
});

$factory->define(App\Meeting::class, function (Faker\Generator $faker) {
    $fakeWeight = $faker->numberBetween(50,110);
    $fakeHeight = $faker->numberBetween(150,190);
        
    return [
        'user_id' => $faker->randomElement([2,3,4,5,6,7,8,9,10,11,12]),
        'review' => 5,
        'weight' => $fakeWeight,
        'height' => $fakeHeight,
        'waist' => $faker->numberBetween(60,100),
        'hip' => $faker->numberBetween(85,120),
        'arm_perimeter' => $faker->numberBetween(20,27),
        'bicipital' => $faker->numberBetween(4,16),
        'tricipital' => $faker->numberBetween(8,30),
        'bmi' => round(floatval(($fakeWeight/pow(($fakeHeight/100),2))),1),
        'ideal_weight' => round(floatval((0.75*($fakeHeight-150))+55),1)
    ];           
});
