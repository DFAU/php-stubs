<?php

/** @phpstub */
class Mutex
{
    /**
     * Create a Mutex
     *
     * @param boolean $lock
     *
     * @return long A newly created and optionally locked Mutex handle
     */
    public function create($lock = NULL)
    {
    }

    /**
     * Destroy Mutex
     *
     * @param long $mutex
     *
     * @return boolean A newly created and optionally locked Mutex handle
     */
    public function destroy($mutex)
    {
    }

    /**
     * Acquire Mutex
     *
     * @param long $mutex
     *
     * @return boolean A newly created and optionally locked Mutex handle
     */
    public function lock($mutex)
    {
    }

    /**
     * Attempt to Acquire Mutex
     *
     * @param long $mutex
     *
     * @return boolean A boolean indication of success.
     */
    public function trylock($mutex)
    {
    }

    /**
     * Release Mutex
     *
     * @param long $mutex
     * @param boolean $destroy
     *
     * @return boolean A boolean indication of success.
     */
    public function unlock($mutex, $destroy = NULL)
    {
    }
}