<?php

/** @phpstub */
class MongoCursorException extends \MongoException
{
    /**
     * The hostname of the server that encountered the error
     *
     * @return string Returns the hostname, or ``NULL`` if the hostname is unknown.
     */
    public function getHost()
    {
    }
}