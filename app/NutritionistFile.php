<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Meeting;

class NutritionistFile extends Model
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
                           'office_phone','mon','tue','wed','thu','fri','sat','initial_hour','final_hour'];

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

    public function getDays()
    {
        $days = "";

        if($this->mon){ $days = $days."Lun "; }
        if($this->tue){ $days = $days."Mar "; }
        if($this->wed){ $days = $days."Mié "; }
        if($this->thu){ $days = $days."Jue "; }
        if($this->fri){ $days = $days."Vie "; }
        if($this->sat){ $days = $days."Sáb"; }

        return $days;
    }

    public function getSchedule($value='')
    {
        return date('H:00',strtotime($this->initial_hour))." a ".date('H:00',strtotime($this->final_hour));
    }

    public function getDateDay($subjectDay)
    {
        $currentDay = getdate()['wday'];

        if($subjectDay <= $currentDay){
            $resultDay = date('d', strtotime('-'.($currentDay-$subjectDay).' day'));
        }
        else{
            $resultDay = date('d', strtotime('+'.($subjectDay-$currentDay).' day'));
        }

        return $resultDay;
    }

    public function getAvailableMeetings($subjectDay)
    {
        $today = getdate();
        $currentDay = $today['wday'];
        $meetings = [];

        if($subjectDay>=$currentDay){
            $initialHour = intval(date('H',strtotime($this->initial_hour)));
            $finalHour = intval(date('H',strtotime($this->final_hour)));
            $meetingDate = date('Y-m-d', strtotime('+'.($subjectDay-$currentDay).' day'));

            for($hour = $initialHour;$hour <= $finalHour; $hour++){
                if($today['hours']<$hour && !$this->isScheduledOrAccomplished($meetingDate,$hour)){
                    array_push($meetings,date('H:i',strtotime($hour.':00')));
                }
            }
        }

        return $meetings;
    }

    protected function isScheduledOrAccomplished($meetingDate,$hour)
    {
        $meetings = Meeting::whereRaw('nutririonist_id = '.$this->id.
                                      ' and date_time = "'.$meetingDate.' '.$hour.':00"', [25])->get();

        if(count($meetings)==0){
            return false;
        }

        return true;
    }

}
