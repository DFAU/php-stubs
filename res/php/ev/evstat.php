<?php

/** @phpstub */
class EvStat extends \EvWatcher
{
    public $path;
    public $interval;

    /**
     * Constructs EvStat watcher object
     *
     * @param string $path
     * @param double $interval
     * @param callable $callback
     * @param mixed $data
     * @param int $priority
     */
    public function __construct($path, $interval, $callback, $data = NULL, $priority = false)
    {
    }

    /**
     * Returns the values most recently detected by Ev
     *
     * @return array Returns array with the values most recently detect by Ev(without actual
     *               
     *               aposing):
     */
    public function attr()
    {
    }

    /**
     * Create a stopped EvStat watcher object
     *
     * @param string $path
     * @param double $interval
     * @param callable $callback
     * @param mixed $data
     * @param int $priority
     *
     * @return void Returns a stopped EvStat watcher object on success.
     */
    public function createStopped($path, $interval, $callback, $data = NULL, $priority = false)
    {
    }

    /**
     * Returns the previous set of values returned by EvStat::attr
     *
     * @return void Returns an array with the same structure as the array returned by
     *              
     *              . The array contains previously detected values.
     */
    public function prev()
    {
    }

    /**
     * Configures the watcher
     *
     * @param string $path
     * @param double $interval
     *
     * @return void 
     */
    public function set($path, $interval)
    {
    }

    /**
     * Initiates the stat call
     *
     * @return bool Returns true if
     *              
     *              exists. Otherwise false.
     */
    public function stat()
    {
    }
}