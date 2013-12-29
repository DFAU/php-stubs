<?php

/** @phpstub */
class Worker
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
     * Identification
     *
     * @return long A numeric identity
     */
    public function getCreatorId()
    {
    }

    /**
     * Stack Analysis
     *
     * @return int An integral value
     */
    public function getStacked()
    {
    }

    /**
     * Identification
     *
     * @return long A numeric identity
     */
    public function getThreadId()
    {
    }

    /**
     * State Detection
     *
     * @return boolean A boolean indication of state
     */
    public function isShutdown()
    {
    }

    /**
     * State Detection
     *
     * @return boolean A boolean indication of state
     */
    public function isWorking()
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
     * @return boolean 
     */
    public function shutdown()
    {
    }

    /**
     * Stacking
     *
     * @param Stackable $work
     *
     * @return int The new length of the stack
     */
    public function stack($work)
    {
    }

    /**
     * Execution
     *
     * @param long $options
     *
     * @return boolean A boolean indication of success
     */
    public function start($options = NULL)
    {
    }

    /**
     * Stacking
     *
     * @param Stackable $work
     *
     * @return int The new length of the stack
     */
    public function unstack($work = NULL)
    {
    }
}