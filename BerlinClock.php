<?php


class BerlinClock
{
    public function minute_converter(string $minutes):string
    {
        if($minutes == "04")
            return "yyyy";
        if($minutes == "03")
            return "yyyx";
        if($minutes == "02")
            return "yyxx";
        if($minutes == "01")
            return "yxxx";
        return "xxxx";
    }
}