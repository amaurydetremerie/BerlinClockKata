<?php

require "vendor/autoload.php";
require "BerlinClock.php";

use PHPUnit\Framework\TestCase;

class BerlinClockTest extends TestCase
{
    public function test_minutes_given0minute_shouldReturnxxxx() {
        $berlinClock = new BerlinClock();

        $actual = $berlinClock->minute_converter("00");

        $this->assertEquals("xxxx", $actual);
    }
}
