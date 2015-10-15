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
    					   'arm_perimeter','bicipital','tricipital','bmi','ideal_weight','plan','comment'];

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
        $time = date('H:i',strtotime($this->date_time));

        return $time;
    }

    public function scopeWhereDate($query,$date)
    {
        if($date != ''){
            $query->whereRaw("date_time::timestamp::date = '".$date."'");
        }
    }

    public function scopeWhereTime($query,$time)
    {
        if($time != ''){
            $query->whereRaw("date_time::timestamp::time = '".$time."'");
        }
    }

    public function scopeWhereMonth($query,$month)
    {
        if($month != ''){
            $query->whereRaw("EXTRACT(MONTH FROM date_time::timestamp::date) = '".$month."'");
        }
    }

    public function scopeWhereYear($query,$year)
    {
        if($year != ''){
            $query->whereRaw("EXTRACT(YEAR FROM date_time::timestamp::date) = '".$year."'");
        }
    }

    public function scopeWhereStatus($query,$status)
    {
        if($status != ''){
            if($status == 'programadas'){
                $status = 'scheduled';
            }
            else{
                $status = 'accomplished';
            }

            $query->whereRaw("status = '".$status."'");
        }
    }
}
