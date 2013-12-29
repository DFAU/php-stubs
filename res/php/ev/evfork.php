<?php

/** @phpstub */
class EvFork extends \EvWatcher
{
    /**
     * Constructs the EvFork watcher object
     *
     * @param callable $callback
     * @param mixed $data
     * @param int $priority
     */
    public function __construct($callback, $data = NULL, $priority = false)
    {
    }

    /**
     * Creates a stopped instance of EvFork watcher class
     *
     * @param string $callback
     * @param string $data
     * @param string $priority
     *
     * @return object Returns EvFork(stopped) object on success.
     */
    public function createStopped($callback, $data = NULL, $priority = NULL)
    {
    }
}