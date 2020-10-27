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

    private function minutes(int $minutes): string
    {
        return $this->berlinClock->minutes_converter($minutes);
    }

    private function simple_hour(int $hour): string
    {
        return $this->berlinClock->simple_hour_converter($hour);
    }

    public function test_simpleMinute_given0minute_shouldReturnxxxx() {
        $actual = $this->simple_minute(0);

        $this->assertEquals("xxxx", $actual);
    }

    public function test_simpleMinute_given1minute_shouldReturnyxxx() {
        $actual = $this->simple_minute(1);

        $this->assertEquals("yxxx", $actual);
    }

    public function test_simpleMinute_given2minutes_shouldReturnyyxx() {
        $actual = $this->simple_minute(2);

        $this->assertEquals("yyxx", $actual);
    }

    public function test_simpleMinute_given3minutes_shouldReturnyyyx() {
        $actual = $this->simple_minute(3);

        $this->assertEquals("yyyx", $actual);
    }

    public function test_simpleMinute_given4minutes_shouldReturnyyyy() {
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

    public function test_minutes_given0minute_shouldReturn11x_CR_4x(){
        $actual = $this->minutes(0);

        $this->assertEquals("xxxxxxxxxxx\nxxxx",$actual);
    }

    public function test_minutes_given1minute_shouldReturn11x_CR_1y3x(){
        $actual = $this->minutes(1);

        $this->assertEquals("xxxxxxxxxxx\nyxxx",$actual);
    }

    public function test_minutes_given2minutes_shouldReturn11x_CR_2y2x(){
        $actual = $this->minutes(2);

        $this->assertEquals("xxxxxxxxxxx\nyyxx",$actual);
    }

    public function test_minutes_given3minutes_shouldReturn11x_CR_3y1x(){
        $actual = $this->minutes(3);

        $this->assertEquals("xxxxxxxxxxx\nyyyx",$actual);
    }

    public function test_minutes_given4minutes_shouldReturn11x_CR_4y(){
        $actual = $this->minutes(4);

        $this->assertEquals("xxxxxxxxxxx\nyyyy",$actual);
    }

    public function test_minutes_given5minutes_shouldReturn1y10x_CR_4x(){
        $actual = $this->minutes(5);

        $this->assertEquals("yxxxxxxxxxx\nxxxx",$actual);
    }

    public function test_minutes_given59minutes_shouldReturn2y1r2y1r2y1r2y_CR_4y(){
        $actual = $this->minutes(59);

        $this->assertEquals("yyryyryyryy\nyyyy",$actual);
    }

    public function test_simpleHour_given0hour_shouldReturn4x(){
        $actual = $this->simple_hour(0);

        $this->assertEquals("xxxx",$actual);
    }

    public function test_simpleHour_given1hour_shouldReturn1y3x(){
        $actual = $this->simple_hour(1);

        $this->assertEquals("yxxx",$actual);
    }

}
