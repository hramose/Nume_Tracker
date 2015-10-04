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
}
