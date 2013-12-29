<?php

/** @phpstub */
class Cond
{
    /**
     * Broadcast a Condition
     *
     * @param long $condition
     *
     * @return boolean A boolean indication of success.
     */
    public function broadcast($condition)
    {
    }

    /**
     * Create a Condition
     *
     * @return long A handle to a Condition Variable
     */
    public function create()
    {
    }

    /**
     * Destroy a Condition
     *
     * @param long $condition
     *
     * @return boolean A boolean indication of success.
     */
    public function destroy($condition)
    {
    }

    /**
     * Signal a Condition
     *
     * @param long $condition
     *
     * @return boolean A boolean indication of success.
     */
    public function signal($condition)
    {
    }

    /**
     * Wait for Condition
     *
     * @param long $condition
     * @param long $mutex
     * @param long $timeout
     *
     * @return boolean A boolean indication of success.
     */
    public function wait($condition, $mutex, $timeout = NULL)
    {
    }
}