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
        App\CNHistory::create(['user_id' => $myUser->id]);

        factory(App\User::class,'patient',10)->create()->each(
            function($u){
                $u->cnHistory()->save(factory(App\CNHistory::class)->make());
            }
        );

        factory(App\User::class,'nutritionist',25)->create()->each(
            function($u){
                $u->nutritionistFile()->save(factory(App\NutritionistFile::class)->make());
                for($i=0;$i<30;$i++){
                    $u->nutritionistMeetings()->save(factory(App\Meeting::class)->make());
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
            'password' => bcrypt('111111'),
            'photo' => 'admin.jpg',
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
}
