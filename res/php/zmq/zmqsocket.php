<?php

/** @phpstub */
class ZMQSocket
{
    /**
     * Construct a new ZMQSocket
     *
     * @param ZMQContext $context
     * @param int $type
     * @param string $persistent_id
     * @param callback $on_new_socket
     */
    public function __construct($context, $type, $persistent_id = NULL, $on_new_socket = NULL)
    {
    }

    /**
     * Bind the socket
     *
     * @param string $dsn
     * @param boolean $force
     *
     * @return ZMQSocket Returns the current object. Throws ZMQSocketException on error.
     */
    public function bind($dsn, $force = false)
    {
    }

    /**
     * Connect the socket
     *
     * @param string $dsn
     * @param boolean $force
     *
     * @return ZMQSocket Returns the current object. Throws ZMQSocketException on error.
     */
    public function connect($dsn, $force = false)
    {
    }

    /**
     * Disconnect a socket
     *
     * @param string $dsn
     *
     * @return ZMQSocket Returns the current object. Throws ZMQSocketException on error.
     */
    public function disconnect($dsn)
    {
    }

    /**
     * Get list of endpoints
     *
     * @return array Returns an array containing elements 'bind' and 'connect'.
     */
    public function getEndpoints()
    {
    }

    /**
     * Get the persistent id
     *
     * @return string Returns the persistent id string assigned of the object and null if socket is not persistent.
     */
    public function getPersistentId()
    {
    }

    /**
     * Get socket option
     *
     * @param string $key
     *
     * @return mixed Returns either a string or an integer depending on . Throws
     *               ZMQSocketException on error.
     */
    public function getSockOpt($key)
    {
    }

    /**
     * Get the socket type
     *
     * @return integer Returns an integer representing the socket type. The integer can be compared against
     *                 constants.
     */
    public function getSocketType()
    {
    }

    /**
     * Whether the socket is persistent
     *
     * @return boolean Returns a boolean based on whether the socket is persistent or not.
     */
    public function isPersistent()
    {
    }

    /**
     * Receives a message
     *
     * @param integer $mode
     *
     * @return string Returns the message. Throws ZMQSocketException in error.
     *                If  is used and the operation would
     *                block boolean false shall be returned.
     */
    public function recv($mode = false)
    {
    }

    /**
     * Receives a multipart message
     *
     * @param integer $mode
     *
     * @return string Returns the array of message parts. Throws ZMQSocketException in error.
     *                If  is used and the operation would
     *                block boolean false shall be returned.
     */
    public function recvMulti($mode = false)
    {
    }

    /**
     * Sends a message
     *
     * @param string $message
     * @param integer $mode
     *
     * @return ZMQSocket Returns the current object. Throws ZMQSocketException on error.
     *                   If  is used and the operation would
     *                   block boolean false shall be returned.
     */
    public function send($message, $mode = false)
    {
    }

    /**
     * Sends a multipart message
     *
     * @param array $message
     * @param integer $mode
     *
     * @return ZMQSocket Returns the current object. Throws ZMQSocketException on error.
     *                   If  is used and the operation would
     *                   block boolean false shall be returned.
     */
    public function sendmulti($message, $mode = false)
    {
    }

    /**
     * Set a socket option
     *
     * @param integer $key
     * @param mixed $value
     *
     * @return ZMQSocket Returns the current object. Throws ZMQSocketException on error.
     */
    public function setSockOpt($key, $value)
    {
    }

    /**
     * Unbind the socket
     *
     * @param string $dsn
     *
     * @return ZMQSocket Returns the current object. Throws ZMQSocketException on error.
     */
    public function unbind($dsn)
    {
    }
}