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
}