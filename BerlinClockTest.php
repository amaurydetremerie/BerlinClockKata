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

    private function simple_minute(string $minute): string
    {
        return $this->berlinClock->minute_converter($minute);
    }

    public function test_minutes_given0minute_shouldReturnxxxx() {
        $actual = $this->simple_minute("00");

        $this->assertEquals("xxxx", $actual);
    }

    public function test_minutes_given1minute_shouldReturnyxxx() {
        $actual = $this->simple_minute("01");

        $this->assertEquals("yxxx", $actual);
    }

    public function test_minutes_given2minute_shouldReturnyyxx() {
        $actual = $this->simple_minute("02");

        $this->assertEquals("yyxx", $actual);
    }

}
