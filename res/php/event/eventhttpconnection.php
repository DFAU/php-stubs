<?php

/** @phpstub */
class EventHttpConnection
{
    /**
     * Constructs EventHttpConnection object
     *
     * @param EventBase $base
     * @param EventDnsBase $dns_base
     * @param string $address
     * @param int $port
     */
    public function __construct($base, $dns_base, $address, $port)
    {
    }

    /**
     * Returns event base associated with the connection
     *
     * @return EventBase On success returns
     *                   ``EventBase``
     *                   object associated with the connection. Otherwise false.
     */
    public function getBase()
    {
    }

    /**
     * Gets the remote address and port associated with the connection
     *
     * @param string $address
     * @param int $port
     *
     * @return void 
     */
    public function getPeer(&$address, &$port)
    {
    }

    /**
     * Makes an HTTP request over the specified connection
     *
     * @param EventHttpRequest $req
     * @param int $type
     * @param string $uri
     *
     * @return bool Returns true on success. Otherwise false.
     */
    public function makeRequest($req, $type, $uri)
    {
    }

    /**
     * Set callback for connection close
     *
     * @param callable $callback
     * @param mixed $data
     *
     * @return void 
     */
    public function setCloseCallback($callback, $data = NULL)
    {
    }

    /**
     * Sets the IP address from which HTTP connections are made
     *
     * @param string $address
     *
     * @return void 
     */
    public function setLocalAddress($address)
    {
    }

    /**
     * Sets the local port from which connections are made
     *
     * @param int $port
     *
     * @return void 
     */
    public function setLocalPort($port)
    {
    }

    /**
     * Sets maximum body size for the connection
     *
     * @param string $max_size
     *
     * @return void 
     */
    public function setMaxBodySize($max_size)
    {
    }

    /**
     * Sets maximum header size
     *
     * @param string $max_size
     *
     * @return void 
     */
    public function setMaxHeadersSize($max_size)
    {
    }

    /**
     * Sets the retry limit for the connection
     *
     * @param int $retries
     *
     * @return void 
     */
    public function setRetries($retries)
    {
    }

    /**
     * Sets the timeout for the connection
     *
     * @param int $timeout
     *
     * @return void 
     */
    public function setTimeout($timeout)
    {
    }
}