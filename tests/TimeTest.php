<?php

use onepiece\toolkit\Time;
use PHPUnit\Framework\TestCase;

class TimeTest extends TestCase
{
    /**
     * 返回当前小时开始和结束的时间戳
     * @return array
     */
    public static function testHour()
    {
        $result = Time::hour();

        self::assertTrue(is_array($result));
    }

}
