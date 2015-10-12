<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['email','role','password','photo','first_name','last_name','birthday','gender','phone',
                           'street','number','neighborhood','zip_code','city','state','country'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    public function nutritionistFile()
    {
        return $this->hasOne('App\NutritionistFile');
    }

    public function cnHistory()
    {
        return $this->hasOne('App\CNHistory');
    }

    public function meetings()
    {
        return $this->hasMany('App\Meeting');
    }

    public function nutritionistMeetings()
    {
        return $this->hasMany('App\Meeting','nutritionist_id');
    }

    public function getAddress()
    {
        return $this->street.' '.$this->number.', '.$this->neighborhood.', CP '.$this->zip_code.', '.
                $this->city.', '.$this->state.', '.$this->country;
    }

    public function getUrlLocation()
    {
        $url = str_replace(" ","+",$this->street)."+".$this->number;

        return $url;
    }

    public function getCompleteName()
    {
        return $this->first_name." ".$this->last_name;
    }

    public function getAge()
    {
        $date = time() - strtotime($this->birthday);
        $age = floor($date / 31556926);

        return " (".$age." años)";
    }

    public function getGender()
    {
        if($this->gender=='masculine'){
            $gender = 'Masculino';
        }
        else{
            $gender = 'Femenino';
        }

        return $gender;
    }
}
