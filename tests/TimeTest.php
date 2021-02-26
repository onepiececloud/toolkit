<?php

use onepiece\toolkit\Time;

class TimeTest extends TestCase
{
    public function testHour()
    {
        $result = Time::hour();

        $this->assertCount(2, $result);
    }

    public function testLastHour()
    {
        $result = Time::lastHour();

        $this->assertCount(2, $result);
    }

}
