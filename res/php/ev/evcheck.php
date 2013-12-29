<?php

/** @phpstub */
class EvCheck extends \EvWatcher
{
    /**
     * Constructs the EvCheck watcher object
     *
     * @param callable $callback
     * @param mixed $data
     * @param int $priority
     */
    public function __construct($callback, $data = NULL, $priority = NULL)
    {
    }

    /**
     * Create instance of a stopped EvCheck watcher
     *
     * @param string $callback
     * @param string $data
     * @param string $priority
     *
     * @return object Returns EvCheck object on success.
     */
    public function createStopped($callback, $data = NULL, $priority = NULL)
    {
    }
}