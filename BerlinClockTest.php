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
        return $this->berlinClock->five_minutes_converter($minute);
    }

    public function test_minute_given0minute_shouldReturnxxxx() {
        $actual = $this->simple_minute(0);

        $this->assertEquals("xxxx", $actual);
    }

    public function test_minute_given1minute_shouldReturnyxxx() {
        $actual = $this->simple_minute(1);

        $this->assertEquals("yxxx", $actual);
    }

    public function test_minute_given2minutes_shouldReturnyyxx() {
        $actual = $this->simple_minute(2);

        $this->assertEquals("yyxx", $actual);
    }

    public function test_minute_given3minutes_shouldReturnyyyx() {
        $actual = $this->simple_minute(3);

        $this->assertEquals("yyyx", $actual);
    }

    public function test_minute_given4minutes_shouldReturnyyyy() {
        $actual = $this->simple_minute(4);

        $this->assertEquals("yyyy", $actual);
    }

    public function test_5minutes_given0minute_shouldReturn11x(){
        $actual = $this->five_minutes(0);

        $this->assertEquals("xxxxxxxxxxx",$actual);
    }

    public function test_5minutes_given5minutes_shouldReturn1y10x(){
        $actual = $this->five_minutes(5);

        $this->assertEquals("yxxxxxxxxxx",$actual);
    }

    public function test_5minutes_given10minutes_shouldReturn2y9x(){
        $actual = $this->five_minutes(10);

        $this->assertEquals("yyxxxxxxxxx",$actual);
    }

    public function test_5minutes_given15minutes_shouldReturn2y1r8x(){
        $actual = $this->five_minutes(15);

        $this->assertEquals("yyrxxxxxxxx",$actual);
    }

    public function test_5minutes_given20minutes_shouldReturn2y1r1y7x(){
        $actual = $this->five_minutes(20);

        $this->assertEquals("yyryxxxxxxx",$actual);
    }

    public function test_5minutes_given25minutes_shouldReturn2y1r2y6x(){
        $actual = $this->five_minutes(25);

        $this->assertEquals("yyryyxxxxxx",$actual);
    }

    public function test_5minutes_given30minutes_shouldReturn2y1r2y1r5x(){
        $actual = $this->five_minutes(30);

        $this->assertEquals("yyryyrxxxxx",$actual);
    }

    public function test_5minutes_given55minutes_shouldReturn2y1r2y1r2y1r2y(){
        $actual = $this->five_minutes(55);

        $this->assertEquals("yyryyryyryy",$actual);
    }
}
