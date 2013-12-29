<?php

/** @phpstub */
class Yar_Client
{
    protected $_uri;
    protected $_running;
    protected $_protocol;
    protected $_options;

    /**
     * Call service
     *
     * @param string $method
     * @param array $parameters
     *
     * @return void 
     */
    public function __call($method, $parameters)
    {
    }

    /**
     * Create a client
     *
     * @param string $url
     */
    public function __construct($url)
    {
    }

    /**
     * Set calling contexts
     *
     * @param number $name
     * @param mixed $value
     *
     * @return boolean 
     */
    public function setOpt($name, $value)
    {
    }
}