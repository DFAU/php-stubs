<?php

/** @phpstub */
class EvSignal extends \EvWatcher
{
    public $signum;

    /**
     * Constructs EvPeriodic watcher object
     *
     * @param int $signum
     * @param callable $callback
     * @param mixed $data
     * @param int $priority
     */
    public function __construct($signum, $callback, $data = NULL, $priority = false)
    {
    }

    /**
     * Create stopped EvSignal watcher object
     *
     * @param int $signum
     * @param callable $callback
     * @param mixed $data
     * @param int $priority
     *
     * @return EvSignal Returns EvSignal object on success.
     */
    public function createStopped($signum, $callback, $data = NULL, $priority = false)
    {
    }

    /**
     * Configures the watcher
     *
     * @param int $signum
     *
     * @return void 
     */
    public function set($signum)
    {
    }
}