<?php


class BerlinClock
{
    public function minute_converter(int $minutes):string
    {
        if($minutes == 4)
            return "yyyy";
        if($minutes == 3)
            return "yyyx";
        if($minutes == 2)
            return "yyxx";
        if($minutes == 1)
            return "yxxx";
        return "xxxx";
    }
}