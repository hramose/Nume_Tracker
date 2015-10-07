<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CNHistory extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cnhistories';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id','ms','oc','sc','re','sd','hm','dt','sw','or','ud','wd','ap1','ap2','ap3','ap4','ap5',
                           'ap6','ap7','ap8','te','dd','im','usd','whd','swu','sur','obe','can','dia','ahi','hip','hep',
                           'fia','ext','fre','dur','wst','smo','dal','dco'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['created_at', 'updated_at'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
