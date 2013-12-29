<?php

/** @phpstub */
class ZMQContext
{
    /**
     * Construct a new ZMQContext object
     *
     * @param integer $io_threads
     * @param boolean $is_persistent
     */
    public function __construct($io_threads = 1, $is_persistent = true)
    {
    }

    /**
     * Get context option
     *
     * @param string $key
     *
     * @return mixed Returns either a string or an integer depending on . Throws
     *               ZMQContextException on error.
     */
    public function getOpt($key)
    {
    }

    /**
     * Create a new socket
     *
     * @param integer $type
     * @param string $persistent_id
     * @param callback $on_new_socket
     *
     * @return ZMQSocket Returns a ZMQSocket object on success. Throws ZMQSocketException on error.
     */
    public function getSocket($type, $persistent_id = NULL, $on_new_socket = NULL)
    {
    }

    /**
     * Whether the context is persistent
     *
     * @return boolean Returns true if the context is persistent and false if the context is non-persistent.
     */
    public function isPersistent()
    {
    }

    /**
     * Set a socket option
     *
     * @param integer $key
     * @param mixed $value
     *
     * @return ZMQContext Returns the current object. Throws ZMQContextException on error.
     */
    public function setOpt($key, $value)
    {
    }
}