<?php

/** @phpstub */
class EvChild extends \EvWatcher
{
    public $rstatus;
    public $rpid;
    public $pid;

    /**
     * Constructs the EvChild watcher object
     *
     * @param int $pid
     * @param bool $trace
     * @param callable $callback
     * @param mixed $data
     * @param int $priority
     */
    public function __construct($pid, $trace, $callback, $data = NULL, $priority = false)
    {
    }

    /**
     * Create instance of a stopped EvCheck watcher
     *
     * @param int $pid
     * @param bool $trace
     * @param callable $callback
     * @param mixed $data
     * @param int $priority
     *
     * @return object 
     */
    public function createStopped($pid, $trace, $callback, $data = NULL, $priority = NULL)
    {
    }

    /**
     * Configures the watcher
     *
     * @param int $pid
     * @param bool $trace
     *
     * @return void 
     */
    public function set($pid, $trace)
    {
    }
}