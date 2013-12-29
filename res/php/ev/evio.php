<?php

/** @phpstub */
class EvIo extends \EvWatcher
{
    public $fd;
    public $events;

    /**
     * Constructs EvIo watcher object
     *
     * @param mixed $fd
     * @param int $events
     * @param callable $callback
     * @param mixed $data
     * @param int $priority
     */
    public function __construct($fd, $events, $callback, $data = NULL, $priority = NULL)
    {
    }

    /**
     * Create stopped EvIo watcher object
     *
     * @param mixed $fd
     * @param int $events
     * @param callable $callback
     * @param mixed $data
     * @param int $priority
     *
     * @return EvIo Returns EvIo object on success.
     */
    public function createStopped($fd, $events, $callback, $data = NULL, $priority = false)
    {
    }

    /**
     * Configures the watcher
     *
     * @param mixed $fd
     * @param int $events
     *
     * @return void 
     */
    public function set($fd, $events)
    {
    }
}