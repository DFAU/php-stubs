<?php

/** @phpstub */
class EvTimer extends \EvWatcher
{
    public $repeat;
    public $remaining;

    /**
     * Constructs an EvTimer watcher object
     *
     * @param double $after
     * @param double $repeat
     * @param callable $callback
     * @param mixed $data
     * @param int $priority
     */
    public function __construct($after, $repeat, $callback, $data = NULL, $priority = false)
    {
    }

    /**
     * Restarts the timer watcher
     *
     * @return void 
     */
    public function again()
    {
    }

    /**
     * Creates EvTimer stopped watcher object
     *
     * @param double $after
     * @param double $repeat
     * @param callable $callback
     * @param mixed $data
     * @param int $priority
     *
     * @return EvTimer Returns EvTimer watcher object on success.
     */
    public function createStopped($after, $repeat, $callback, $data = NULL, $priority = false)
    {
    }

    /**
     * Configures the watcher
     *
     * @param double $after
     * @param double $repeat
     *
     * @return void 
     */
    public function set($after, $repeat)
    {
    }
}