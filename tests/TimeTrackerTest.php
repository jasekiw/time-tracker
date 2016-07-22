<?php

/**
 * Created by PhpStorm.
 * User: Jason Gallavin
 * Date: 7/22/2016
 * Time: 10:27 AM
 */
class TimeTrackerTest extends PHPUnit_Framework_TestCase
{
    function testTime(){
        $timer = new \jasekiw\timeTracker\TimeTracker();
        $timer->startTimer('test');
        sleep(1);
        $timer->stopTimer('test');
        $results = $timer->getTimeSpent('test');
        $this->assertEquals(1, (int)$results);
    }
    
}
