<?php


class BerlinClock
{
    public function simple_minute_converter(int $minutes):string
    {
        $tmp="";
        for($i=0;$i<$minutes;$i++){
            $tmp.="y";
        }
        while(strlen($tmp)<4){
            $tmp .= "x";
        }
        return $tmp;
    }

    public function five_minutes_converter(int $minutes):string
    {
        $tmp="";
        for($i=5;$i<=$minutes;$i+=5){
            if($i%15===0) $tmp.="r";
            else $tmp.="y";
        }
        while(strlen($tmp)<11){
            $tmp .= "x";
        }
        return $tmp;
    }

    public function minutes_converter(int $minutes):string
    {
        $simple_minutes = $this->simple_minute_converter($minutes%5);
        $five_minutes = $this->five_minutes_converter($minutes-($minutes%5));
        return $five_minutes."\n".$simple_minutes;
    }

    public function simple_hour_converter(int $hour)
    {
        $tmp="";
        for($i=0;$i<$hour;$i++){
            $tmp.="r";
        }
        while(strlen($tmp)<4){
            $tmp .= "x";
        }
        return $tmp;
    }

    public function five_hours_converter(int $hours)
    {
        return $this->simple_hour_converter($hours/5);
    }

    public function hours_converter(int $hours){
        $simple_hour=$this->simple_hour_converter($hours%5);
        $five_hours=$this->five_hours_converter($hours-($hours%5));
        return $five_hours."\n".$simple_hour;
    }

    public function seconds_converter(int $seconds){
        if($seconds%2===0) return "r";
        return "x";
    }

    public function entire_clock(string $time)
    {
        $seconds = substr($time,-2);
        $seconds = intval($seconds);
        $seconds = $this->seconds_converter($seconds);
        if($time == "00-01-00") return $seconds."\nxxxx\nxxxx\nxxxxxxxxxxx\nyxxx";
        return $seconds."\nxxxx\nxxxx\nxxxxxxxxxxx\nxxxx";
    }
}