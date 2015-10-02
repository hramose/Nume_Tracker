<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nutritionist_file extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'nutritionists_files';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id','reviews','score','ranking','grade','license','speciality','about_me',
    					   'office_phone','mon','tue','wed','thu','fri','sat','sun','initial_hour','final_hour'];

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
