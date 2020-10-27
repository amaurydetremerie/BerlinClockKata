<?php


class BerlinClock
{
    public function minute_converter(int $minutes):string
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
}