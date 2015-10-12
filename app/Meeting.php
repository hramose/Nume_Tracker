<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'meetings';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id','nutritionist_id','date_time','status','review','weight','height','waist','hip',
    					   'arm_perimeter','bicipital','tricipital','bmi','ideal_weight','card_number',
    					   'expiration_date','cv_code','name','plan','comment'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['created_at', 'updated_at'];

    public function patient()
    {
        return $this->belongsTo('App\User','user_id');
    }

    public function nutritionist()
    {
    	return $this->belongsTo('App\User','nutritionist_id');
    }

    public function isSunday()
    {
        return (getdate(strtotime($this->date_time))['wday']==0);
    }

    public function getScheduleDateTime()
    {
        $dt = getdate(strtotime($this->date_time));
        $week = [0=>"Domingo",1 => "Lunes",2 => "Martes",3 => "Miércoles",4 => "Jueves",5 => "Viernes",6 => "Sábado"];
        $months = [1 => 'Ene',2 => 'Feb',3 => 'Mar',4 => 'Abr',5 => 'May',6 => 'Jun',
                   7 => 'Jul',8 => 'Ago',9 => 'Sep',10 => 'Oct',11 => 'Nov',12 => 'Dic'];

        return $week[$dt['wday']]." ".$dt['mday']." de ".$months[$dt['mon']]." ".$dt['year'];
    }

    public function getTime()
    {
        $hours = date('h',strtotime($this->date_time));
        $min = date('i',strtotime($this->date_time));

        return $hours.":".$min;
    }
}
