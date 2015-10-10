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

    public function getSchedule()
    {
        return date('H:00',strtotime($this->initial_hour))." a ".date('H:00',strtotime($this->final_hour));
    }

    public function getScheduleDiary()
    {
        $wday = intval(date('w'));
        $mday = date('Y-m-j');
        $week = [1 => "Lunes",2 => "Martes",3 => "Miércoles",4 => "Jueves",5 => "Viernes",6 => "Sábado"];
        $workDays = [1 => $this->mon,2 => $this->tue,3 => $this->wed,4 => $this->thu,5 => $this->fri,6 => $this->sat];
        $dateComplete = '';
        $html = '';

        for($i=0;$i<7;$i++)
        {
            if($wday == 7){
                $wday = 0;
            }

            if($wday!=0){
                $strMDay = strtotime('+'.$i.' day',strtotime($mday));
                $dateComplete = date('Y-m-d',$strMDay);
                $strMDay = date('d',$strMDay);
                $html = $html."<tr>\n<th>\n<div class=\"col-xs-2\">\n<span>".$week[$wday].
                              "&nbsp;&nbsp;&nbsp;".$strMDay."</span>\n</div>\n<div class=\"col-xs-10\">\n";

                if($workDays[$wday]){
                    foreach($this->getAvailableMeetings($i) as $meeting){
                        $html = $html."<label data-date=\"".$week[$wday]." ".$strMDay." ".
                                "de ".$this->getMonthYear()."\" data-horary=\"".$meeting.
                                "\" data-inh=\"".$dateComplete." ".$meeting.":00\"class=\"schedule\">".
                                $meeting."</label>\n";
                    }
                }
                else{
                    $html = $html."<p class=\"nd\"><i>Día inactivo</i></p>";
                }

                $html = $html."</div>\n</th>\n</tr>";
            }

            $wday += 1;
        }

        return $html;
    }

    public function getAvailableMeetings($addedDays)
    {
        $initialHour = intval(date('H',strtotime($this->initial_hour)));
        $finalHour = intval(date('H',strtotime($this->final_hour)));
        $meetingDate = date('Y-m-d', strtotime('+'.$addedDays.' day'));
        $meetings = [];

        for($hour = $initialHour;$hour <= $finalHour; $hour++){
            if($this->isAvailable($meetingDate,$hour)){
                if($addedDays > 0){
                    array_push($meetings,date('H:i',strtotime($hour.':00')));
                }
                else if(getdate()['hours']<$hour){
                    array_push($meetings,date('H:i',strtotime($hour.':00')));
                }
            }
        }

        return $meetings;
    }

    protected function isAvailable($meetingDate,$hour)
    {   
        $query = 'nutritionist_id = \''.$this->user->id.'\' and date_time = \''.$meetingDate.' '.$hour.':00:00\'';
        $meeting = Meeting::whereRaw($query)->get();

        if(count($meeting) == 0 || $meeting[0]->status == 'cancelled')
        {
            return true;
        }

        return false;
    }

    public function getMonthYear()
    {
        $months = [1 => 'Enero',2 => 'Febrero',3 => 'Marzo',4 => 'Abril',5 => 'Mayo',6 => 'Junio',
                   7 => 'Julio',8 => 'Agosto',9 => 'Septiembre',10 => 'Octubre',11 => 'Noviembre',12 => 'Diciembre'];

        $m = date('n');
        $y =date('Y');

        return $months[$m]." ".$y;
    }

}
