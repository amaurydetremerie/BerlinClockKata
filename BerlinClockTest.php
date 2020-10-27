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

    private function five_minutes(int $minute): string
    {
        return $this->berlinClock->five_minute_converter($minute);
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

    public function test_5minute_given0minute_shouldReturn11x(){
        $actual = $this->five_minutes(0);

        $this->assertEquals("xxxxxxxxxxx",$actual);
    }

    public function test_5minute_given5minute_shouldReturn1y10x(){
        $actual = $this->five_minutes(5);

        $this->assertEquals("yxxxxxxxxxx",$actual);
    }

    public function test_5minute_given10minute_shouldReturn2y9x(){
        $actual = $this->five_minutes(10);

        $this->assertEquals("yyxxxxxxxxx",$actual);
    }
}
