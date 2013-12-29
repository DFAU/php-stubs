<?php

/** @phpstub */
class MongoClient
{
    const DEFAULT_HOST = '"localhost"';
    const DEFAULT_PORT = 27017;
    const RP_NEAREST = '"nearest"';
    const RP_PRIMARY = '"primary"';
    const RP_PRIMARY_PREFERRED = '"primaryPreferred"';
    const RP_SECONDARY = '"secondary"';
    const RP_SECONDARY_PREFERRED = '"secondaryPreferred"';
    const VERSION = '';

    /** @var string */
    public $status;

    /** @var boolean */
    public $connected;

    /** @var string */
    protected $server;

    /** @var boolean */
    protected $persistent;

    /**
     * Creates a new database connection object
     */
    public function __construct()
    {
    }

    /**
     * Gets a database
     *
     * @param string $dbname
     *
     * @return MongoDB Returns a new db object.
     */
    public function __get($dbname)
    {
    }

    /**
     * String representation of this connection
     *
     * @return string Returns hostname and port for this connection.
     */
    public function __toString()
    {
    }

    /**
     * Closes this connection
     *
     * @param boolean|string $connection
     *
     * @return bool Returns if the connection was successfully closed.
     */
    public function close($connection = NULL)
    {
    }

    /**
     * Connects to a database server
     *
     * @return bool If the connection was successful.
     */
    public function connect()
    {
    }

    /**
     * Drops a database [deprecated]
     *
     * @param mixed $db
     *
     * @return array Returns the database response.
     */
    public function dropDB($db)
    {
    }

    /**
     * Return info about all open connections
     *
     * @return array An ``array`` of open connections.
     */
    public function getConnections()
    {
    }

    /**
     * Updates status for all associated hosts
     *
     * @return array Returns an array of information about the hosts in the set. Includes each
     *               host's hostname, its health (1 is healthy), its state (1 is primary, 2 is
     *               secondary, 0 is anything else), the amount of time it took to ping the
     *               server, and when the last ping occurred. For example, on a three-member
     *               replica set, it might look something like:
     */
    public function getHosts()
    {
    }

    /**
     * Get the read preference for this connection
     *
     * @return array
     */
    public function getReadPreference()
    {
    }

    /**
     * Kills a specific cursor on the server
     *
     * @param string $server_hash
     * @param int|MongoInt64 $id
     *
     * @return bool Returns true if the method attempted to kill a cursor, and false if
     *              there was something wrong with the arguments (such as a wrong
     *              ). The return status does  where the cursor was actually killed as the server does
     *              not provide that information.
     */
    public function killCursor($server_hash, $id)
    {
    }

    /**
     * Lists all of the databases available.
     *
     * @return array Returns an associative array containing three fields.  The first field is
     *               , which in turn contains an array.  Each element
     *               of the array is an associative array corresponding to a database, giving th
     *               database's name, size, and if it's empty.  The other two fields are
     *               (in bytes) and , which is 1
     *               if this method ran successfully.
     */
    public function listDBs()
    {
    }

    /**
     * Gets a database collection
     *
     * @param string $db
     * @param string $collection
     *
     * @return MongoCollection Returns a new collection object.
     */
    public function selectCollection($db, $collection)
    {
    }

    /**
     * Gets a database
     *
     * @param string $name
     *
     * @return MongoDB Returns a new database object.
     */
    public function selectDB($name)
    {
    }

    /**
     * Set the read preference for this connection
     *
     * @param string $read_preference
     * @param array $tags
     *
     * @return bool
     */
    public function setReadPreference($read_preference, $tags = array())
    {
    }
}