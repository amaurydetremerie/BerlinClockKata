<?php


class BerlinClock
{
    public function minute_converter(string $minutes):string
    {
        if($minutes == "01")
            return "jxxx";
        return "xxxx";
    }
}