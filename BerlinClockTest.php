<?php

require "vendor/autoload.php";
require "BerlinClock.php";

use PHPUnit\Framework\TestCase;

class BerlinClockTest extends TestCase
{
    private $berlinClock;

    protected function setUp(): void
    {
        parent::setUp();
        $this->berlinClock = new BerlinClock();
    }

    public function test_minutes_given0minute_shouldReturnxxxx() {
        $actual = $this->berlinClock->minute_converter("00");

        $this->assertEquals("xxxx", $actual);
    }

    public function test_minutes_given1minute_shouldReturnyxxx() {
        $actual = $this->berlinClock->minute_converter("01");

        $this->assertEquals("yxxx", $actual);
    }
}
