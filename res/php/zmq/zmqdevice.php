<?php

/** @phpstub */
class ZMQDevice
{
    /**
     * Construct a new device
     *
     * @param ZMQSocket $frontend
     * @param ZMQSocket $backend
     * @param ZMQSocket $listener
     */
    public function __construct($frontend, $backend, $listener = NULL)
    {
    }

    /**
     * Get the idle timeout
     *
     * @return ZMQDevice This method returns the idle callback timeout value.
     */
    public function getIdleTimeout()
    {
    }

    /**
     * Get the timer timeout
     *
     * @return ZMQDevice This method returns the timer timeout value.
     */
    public function getTimerTimeout()
    {
    }

    /**
     * Run the new device
     *
     * @return void Call to this method will block until the device is running. It is not recommended
     *              that devices are used from interactive scripts. On failure this method will throw
     *              ZMQDeviceException.
     */
    public function run()
    {
    }

    /**
     * Set the idle callback function
     *
     * @param callable $cb_func
     * @param integer $timeout
     * @param mixed $user_data
     *
     * @return ZMQDevice On success this method returns the current object.
     */
    public function setIdleCallback($cb_func, $timeout, $user_data = NULL)
    {
    }

    /**
     * Set the idle timeout
     *
     * @param integer $timeout
     *
     * @return ZMQDevice On success this method returns the current object.
     */
    public function setIdleTimeout($timeout)
    {
    }

    /**
     * Set the timer callback function
     *
     * @param callable $cb_func
     * @param integer $timeout
     * @param mixed $user_data
     *
     * @return ZMQDevice On success this method returns the current object.
     */
    public function setTimerCallback($cb_func, $timeout, $user_data = NULL)
    {
    }

    /**
     * Set the timer timeout
     *
     * @param integer $timeout
     *
     * @return ZMQDevice On success this method returns the current object.
     */
    public function setTimerTimeout($timeout)
    {
    }
}