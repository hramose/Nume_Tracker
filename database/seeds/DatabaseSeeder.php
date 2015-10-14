<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Model::unguard();

        //Creación del usuario administrador
        factory(App\User::class)->create($this->mySuperUser());

        //Usuario paciente
        $myUser = factory(App\User::class)->create($this->myUser());
        factory(App\CNHistory::class)->create(['user_id' => $myUser->id]);

        factory(App\User::class,'patient',10)->create()->each(
            function($u){
                $u->cnHistory()->save(factory(App\CNHistory::class)->make());
            }
        );

        //Usuario nutriólogo
        $myNutritionistUser = factory(App\User::class,'nutritionist')->create($this->myNutritionistUser());
        $myNutritionistUser->nutritionistFile()
                           ->save(factory(App\NutritionistFile::class)->make($this->myNutritionistFile())); 

        $faker1 = Faker\Factory::create();
        for($i=0;$i<20;$i++){
            $nutritionist = $myNutritionistUser->nutritionistFile;
            $fakeTime = date('H:00:00',$faker1->dateTimeBetween($nutritionist->initial_hour,$nutritionist->final_hour)->getTimestamp());
            $fakeDateTime = date('Y-m-d '.$fakeTime,$faker1->dateTimeBetween('-1 year','+1 year')->getTimestamp());
            $fakePlan = '';
            $fakeComment = '';

            if(date_create($fakeDateTime)>date_create()){
                $fakeStatus = 'scheduled';
            }
            else{
                $fakeStatus = $faker1->randomElement(['scheduled','accomplished']);

                if($fakeStatus == 'accomplished'){
                    $fakePlan = 'plan_test.pdf';
                    $fakeComment = $faker1->realText(200,4);
                }
            }

            $myNutritionistUser->nutritionistMeetings()->save(factory(App\Meeting::class)
                ->make(['date_time' => $fakeDateTime,'status' => $fakeStatus,'plan' => $fakePlan,'comment' => $fakeComment]));
        }

        factory(App\User::class,'nutritionist',25)->create()->each(
            function($u){
                $u->nutritionistFile()->save(factory(App\NutritionistFile::class)->make());
                $faker = Faker\Factory::create();
                for($i=0;$i<20;$i++){
                    $nutritionist = $u->nutritionistFile;
                    $fakeTime = date('H:00:00',$faker->dateTimeBetween($nutritionist->initial_hour,$nutritionist->final_hour)->getTimestamp());
                    $fakeDateTime = date('Y-m-d '.$fakeTime,$faker->dateTimeBetween('-1 year','+1 year')->getTimestamp());
                    $fakePlan = '';
                    $fakeComment = '';

                    if(date_create($fakeDateTime)>date_create()){
                        $fakeStatus = 'scheduled';
                    }
                    else{
                        $fakeStatus = $faker->randomElement(['scheduled','accomplished']);

                        if($fakeStatus == 'accomplished'){
                            $fakePlan = 'plan_test.pdf';
                            $fakeComment = $faker->realText(200,4);
                        }
                    }

                    $u->nutritionistMeetings()->save(factory(App\Meeting::class)
                        ->make(['date_time' => $fakeDateTime,'status' => $fakeStatus,'plan' => $fakePlan,'comment' => $fakeComment]));
                }
            }
        );

        Model::reguard();
    }

    protected function mySuperUser()
    {
        return [
            'role' => 'admin',
            'email' => 'jluis.acostazamora@gmail.com',
            'password' => bcrypt('000000'),
            'photo' => 'admin.png',
            'first_name' => 'José Luis',
            'last_name' => 'Acosta Zamora',
            'birthday' => '1990-12-27',
            'gender' => 'masculine',
            'phone' => '524442081249',
            'street' => 'César López de Lara',
            'number' => '820',
            'neighborhood' => 'El paseo',
            'zip_code' => '78320',
            'city' => 'San Luis Potosí',
            'state' => 'San Luis Potosí',
            'country' => 'México',
            'remember_token' => str_random(10)
        ];
    }

    protected function myUser()
    {
        return [
            'role' => 'patient',
            'email' => 'jluis.acosta@outlook.com',
            'password' => bcrypt('111111'),
            'photo' => 'me.jpg',
            'first_name' => 'José Luis',
            'last_name' => 'Acosta Zamora',
            'birthday' => '1990-12-27',
            'gender' => 'masculine',
            'phone' => '524442081249',
            'street' => 'César López de Lara',
            'number' => '820',
            'neighborhood' => 'El paseo',
            'zip_code' => '78320',
            'city' => 'San Luis Potosí',
            'state' => 'San Luis Potosí',
            'country' => 'México',
            'remember_token' => str_random(10)
        ];
    }

    protected function myNutritionistUser()
    {
        return [
            'role' => 'nutritionist',
            'email' => 'jlaz@gmail.com',
            'password' => bcrypt('333333'),
            'photo' => 'nut.jpg',
            'first_name' => 'José Luis',
            'last_name' => 'Acosta Zamora',
            'birthday' => '1990-12-27',
            'gender' => 'masculine',
            'phone' => '524442081249',
            'street' => 'César López de Lara',
            'number' => '820',
            'neighborhood' => 'El paseo',
            'zip_code' => '78320',
            'city' => 'San Luis Potosí',
            'state' => 'San Luis Potosí',
            'country' => 'México',
            'remember_token' => str_random(10)
        ];
    }

    protected function myNutritionistFile()
    {
        $fakeReviews = 50;
        $fakeScore = 250;

        return [
            'reviews' => $fakeReviews,
            'score' => $fakeScore,
            'ranking' => round(floatval($fakeScore/$fakeReviews),1),
            'grade' => 'Lic. Nutrición',
            'license' => 'AOZL271290HSPCMS01',
            'speciality' => 'Trastornos alimenticios',
            'about_me' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed 
                           do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'office_phone' => '8169434',
            'mon' => true,
            'tue' => true,
            'wed' => true,
            'thu' => true,
            'fri' => true,
            'sat' => false,
            'initial_hour' => '8:00',
            'final_hour' => '19:00'
        ];
    }
}
