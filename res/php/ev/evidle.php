<?php

/** @phpstub */
class EvIdle extends \EvWatcher
{
    /**
     * Constructs the EvIdle watcher object
     *
     * @param callable $callback
     * @param mixed $data
     * @param int $priority
     */
    public function __construct($callback, $data = NULL, $priority = NULL)
    {
    }

    /**
     * Creates instance of a stopped EvIdle watcher object
     *
     * @param string $callback
     * @param mixed $data
     * @param int $priority
     *
     * @return object Returns EvIdle object on success.
     */
    public function createStopped($callback, $data = NULL, $priority = NULL)
    {
    }
}