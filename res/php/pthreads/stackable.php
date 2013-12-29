<?php

/** @phpstub */
class Stackable
{
    /**
     * Manipulation
     *
     * @param long $size
     * @param boolean $preserve
     *
     * @return boolean An array of items from the objects member table
     */
    public function chunk($size, $preserve)
    {
    }

    /**
     * State Detection
     *
     * @return boolean A boolean indication of state
     */
    public function isRunning()
    {
    }

    /**
     * State Detection
     *
     * @return boolean A boolean indication of state
     */
    public function isTerminated()
    {
    }

    /**
     * State Detection
     *
     * @return boolean A boolean indication of state
     */
    public function isWaiting()
    {
    }

    /**
     * Synchronization
     *
     * @return boolean A boolean indication of success
     */
    public function lock()
    {
    }

    /**
     * Manipulation
     *
     * @param mixed $from
     * @param mixed $overwrite
     *
     * @return boolean A boolean indication of success
     */
    public function merge($from, $overwrite = NULL)
    {
    }

    /**
     * Synchronization
     *
     * @return boolean A boolean indication of state
     */
    public function notify()
    {
    }

    /**
     * Manipulation
     *
     * @return boolean The last item from the objects properties table
     */
    public function pop()
    {
    }

    /**
     * Execution
     *
     * @return void The methods return value, if used, will be ignored
     */
    public function run()
    {
    }

    /**
     * Manipulation
     *
     * @return boolean The first item from the objects properties table
     */
    public function shift()
    {
    }

    /**
     * Synchronization
     *
     * @phpstub-variable-parameters
     *
     * @param Closure $block
     * @param mixed $_
     *
     * @return mixed The return value from the block
     */
    public function synchronized($block, $_ = NULL)
    {
    }

    /**
     * Synchronization
     *
     * @return boolean A boolean indication of success
     */
    public function unlock()
    {
    }

    /**
     * Synchronization
     *
     * @param string $timeout
     *
     * @return boolean A boolean indication of success
     */
    public function wait($timeout = NULL)
    {
    }
}