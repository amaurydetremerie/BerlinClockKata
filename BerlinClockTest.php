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

    private function simple_minute(int $minute): string
    {
        return $this->berlinClock->simple_minute_converter($minute);
    }

    public function test_minutes_given0minute_shouldReturnxxxx() {
        $actual = $this->simple_minute(0);

        $this->assertEquals("xxxx", $actual);
    }

    public function test_minutes_given1minute_shouldReturnyxxx() {
        $actual = $this->simple_minute(1);

        $this->assertEquals("yxxx", $actual);
    }

    public function test_minutes_given2minute_shouldReturnyyxx() {
        $actual = $this->simple_minute(2);

        $this->assertEquals("yyxx", $actual);
    }

    public function test_minutes_given3minute_shouldReturnyyyx() {
        $actual = $this->simple_minute(3);

        $this->assertEquals("yyyx", $actual);
    }

    public function test_minutes_given4minute_shouldReturnyyyy() {
        $actual = $this->simple_minute(4);

        $this->assertEquals("yyyy", $actual);
    }



}
