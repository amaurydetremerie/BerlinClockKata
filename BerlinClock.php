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

    public function five_minute_converter(int $minutes):string {
        return "xxxxxxxxxxx";
    }
}