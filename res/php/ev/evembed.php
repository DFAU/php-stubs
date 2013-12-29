<?php

/** @phpstub */
class EvEmbed extends \EvWatcher
{
    public $embed;

    /**
     * Constructs the EvEmbed object
     *
     * @param object $other
     * @param callable $callback
     * @param mixed $data
     * @param int $priority
     */
    public function __construct($other, $callback = NULL, $data = NULL, $priority = NULL)
    {
    }

    /**
     * Create stopped EvEmbed watcher object
     *
     * @param object $other
     * @param callable $callback
     * @param mixed $data
     * @param int $priority
     *
     * @return void Returns stopped EvEmbed object on success.
     */
    public function createStopped($other, $callback = NULL, $data = NULL, $priority = NULL)
    {
    }

    /**
     * Configures the watcher
     *
     * @param object $other
     *
     * @return void 
     */
    public function set($other)
    {
    }

    /**
     * Make a single, non-blocking sweep over the embedded loop.
     *
     * @return void 
     */
    public function sweep()
    {
    }
}