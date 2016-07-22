<?php
namespace jasekiw\timeTracker;


class TimeTracker
{
    
    /** @var array   */
    private $traces;
    
    function __construct()
    {
        $this->traces = [];
    }
    
    public function startTimer($name)
    {
        $this->traces[$name] = microtime(true);
    }
    
    /**
     * Stops the timer and returns the time spent on the specified task
     *
     * @param $name
     *
     * @return mixed
     */
    public function stopTimer($name)
    {
        $this->traces[$name] = microtime(true) - $this->traces[$name];
        return $this->traces[$name];
    }
    
    /**
     * Gets the time spent on the specified job in seconds
     *
     * @param $name
     *
     * @return mixed
     */
    public function getTimeSpent($name)
    {
        return $this->traces[$name];
    }
    
    /**
     * @param int $length
     */
    public function getResults($length = 4)
    {
        foreach ($this->traces as $name => $time) {
            echo "Time Tracker - " . $name . " Finished in " . round($time, $length) . " seconds.<br />";
        }
    }
    
    /**
     * Gets the results as a string
     *
     * @param int $length
     *
     * @return string
     */
    public function getResultsAsString($length = 4)
    {
        $output = "";
        foreach ($this->traces as $name => $time)
            $output .= "Time Tracker - " . $name . " Finished in " . round($time, $length) . " seconds.\n";
        return $output;
    }


    
}