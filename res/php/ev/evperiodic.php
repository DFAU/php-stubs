<?php

/** @phpstub */
class EvPeriodic extends \EvWatcher
{
    public $offset;
    public $interval;

    /**
     * Constructs EvPeriodic watcher object
     *
     * @param double $offset
     * @param string $interval
     * @param callable $reschedule_cb
     * @param callable $callback
     * @param mixed $data
     * @param int $priority
     */
    public function __construct($offset, $interval, $reschedule_cb, $callback, $data = NULL, $priority = false)
    {
    }

    /**
     * Simply stops and restarts the periodic watcher again.
     *
     * @return void 
     */
    public function again()
    {
    }

    /**
     * Returns the absolute time that this
      watcher is supposed to trigger next
     *
     * @return double Returns the absolute time this watcher is supposed to trigger next in
     *                seconds.
     */
    public function at()
    {
    }

    /**
     * Create a stopped EvPeriodic watcher
     *
     * @param double $offset
     * @param double $interval
     * @param callable $reschedule_cb
     * @param callable $callback
     * @param mixed $data
     * @param int $priority
     *
     * @return EvPeriodic Returns EvPeriodic watcher object on success.
     */
    public function createStopped($offset, $interval, $reschedule_cb, $callback, $data = NULL, $priority = false)
    {
    }

    /**
     * Configures the watcher
     *
     * @param double $offset
     * @param double $interval
     *
     * @return void 
     */
    public function set($offset, $interval)
    {
    }
}