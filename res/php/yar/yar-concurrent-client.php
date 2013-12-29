<?php

/** @phpstub */
class Yar_Concurrent_Client
{
    public $_error_callback;
    public $_callstack;
    public $_callback;

    /**
     * Register a concurrent call
     *
     * @param string $uri
     * @param string $method
     * @param array $parameters
     * @param callable $callback
     *
     * @return int An unique id, can be used to identified which call it is.
     */
    public function call($uri, $method, $parameters, $callback = NULL)
    {
    }

    /**
     * Send all calls
     *
     * @param callable $callback
     * @param callable $error_callback
     *
     * @return boolean 
     */
    public function loop($callback = NULL, $error_callback = NULL)
    {
    }
}