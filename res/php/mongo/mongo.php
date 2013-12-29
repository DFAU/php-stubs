<?php

/** @phpstub */
class Mongo extends \MongoClient
{
    /**
     * The __construct purpose
     */
    public function __construct()
    {
    }

    /**
     * Connects with a database server
     *
     * @return bool If the connection was successful.
     */
    public function connectUtil()
    {
    }

    /**
     * Get pool size for connection pools
     *
     * @return int Returns the current pool size.
     */
    public function getPoolSize()
    {
    }

    /**
     * Returns the address being used by this for slaveOkay reads
     *
     * @return string The address of the secondary this connection is using for reads.
     */
    public function getSlave()
    {
    }

    /**
     * Get slaveOkay setting for this connection
     *
     * @return bool Returns the value of slaveOkay for this instance.
     */
    public function getSlaveOkay()
    {
    }

    /**
     * Returns information about all connection pools.
     *
     * @return array Each connection pool has an identifier, which starts with the host. For each
     *               pool, this function shows the following fields:
     */
    public function poolDebug()
    {
    }

    /**
     * Set the size for future connection pools.
     *
     * @param int $size
     *
     * @return bool Returns the former value of pool size.
     */
    public function setPoolSize($size)
    {
    }

    /**
     * Change slaveOkay setting for this connection
     *
     * @param bool $ok
     *
     * @return bool Returns the former value of slaveOkay for this instance.
     */
    public function setSlaveOkay($ok = true)
    {
    }

    /**
     * Choose a new secondary for slaveOkay reads
     *
     * @return string The address of the secondary this connection is using for reads. This may be
     *                the same as the previous address as addresses are randomly chosen. It may
     *                return only one address if only one secondary (or only the primary) is
     *                available.
     */
    public function switchSlave()
    {
    }
}