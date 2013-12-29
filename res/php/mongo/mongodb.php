<?php

/** @phpstub */
class MongoDB
{
    const PROFILING_OFF = 0;
    const PROFILING_ON = 2;
    const PROFILING_SLOW = 1;

    /** @var integer */
    public $wtimeout;

    /** @var integer */
    public $w;

    /**
     * Creates a new database
     *
     * @param MongoClient $conn
     * @param string $name
     */
    public function __construct($conn, $name)
    {
    }

    /**
     * Gets a collection
     *
     * @param string $name
     *
     * @return MongoCollection Returns the collection.
     */
    public function __get($name)
    {
    }

    /**
     * The name of this database
     *
     * @return string Returns this databaseaposs name.
     */
    public function __toString()
    {
    }

    /**
     * Log in to this database
     *
     * @param string $username
     * @param string $password
     *
     * @return array Returns database response.  If the login was successful, it will return
     *               
     *               If something went wrong, it will return
     *               
     *               ("auth fails" could be another message, depending on database version and what
     *               when wrong).
     */
    public function authenticate($username, $password)
    {
    }

    /**
     * Execute a database command
     *
     * @param array $command
     * @param array $options
     *
     * @return array Returns database response. Every database response is always maximum one
     *               document, which means that the result of a database command can never
     *               exceed 16MB. The resulting document's structure depends on the command, but
     *               most results will have the  field to indicate success
     *               or failure and  containing an array of each of
     *               the resulting documents.
     */
    public function command($command, $options = array())
    {
    }

    /**
     * Creates a collection
     *
     * @param string $name
     * @param array $options
     *
     * @return MongoCollection Returns a collection object representing the new collection.
     */
    public function createCollection($name, $options = array())
    {
    }

    /**
     * Creates a database reference
     *
     * @param string $collection
     * @param mixed $document_or_id
     *
     * @return array Returns a database reference array.
     */
    public function createDBRef($collection, $document_or_id)
    {
    }

    /**
     * Drops this database
     *
     * @return array Returns the database response.
     */
    public function drop()
    {
    }

    /**
     * Drops a collection [deprecated]
     *
     * @param mixed $coll
     *
     * @return array Returns the database response.
     */
    public function dropCollection($coll)
    {
    }

    /**
     * Runs JavaScript code on the database server.
     *
     * @param mixed $code
     * @param array $args
     *
     * @return array Returns the result of the evaluation.
     */
    public function execute($code, $args = array())
    {
    }

    /**
     * Creates a database error
     *
     * @return bool Returns the database response.
     */
    public function forceError()
    {
    }

    /**
     * Get all collections from this database
     *
     * @param bool $includeSystemCollections
     *
     * @return array Returns the names of the all the collections in the database as an ``array``.
     */
    public function getCollectionNames($includeSystemCollections = false)
    {
    }

    /**
     * Fetches the document pointed to by a database reference
     *
     * @param array $ref
     *
     * @return array Returns the document pointed to by the reference.
     */
    public function getDBRef($ref)
    {
    }

    /**
     * Fetches toolkit for dealing with files stored in this database
     *
     * @param string $prefix
     *
     * @return MongoGridFS Returns a new gridfs object for this database.
     */
    public function getGridFS($prefix = 'quotfsquot')
    {
    }

    /**
     * Gets this databaseaposs profiling level
     *
     * @return int Returns the profiling level.
     */
    public function getProfilingLevel()
    {
    }

    /**
     * Get the read preference for this database
     *
     * @return array
     */
    public function getReadPreference()
    {
    }

    /**
     * Get slaveOkay setting for this database
     *
     * @return bool Returns the value of slaveOkay for this instance.
     */
    public function getSlaveOkay()
    {
    }

    /**
     * Check if there was an error on the most recent db operation performed
     *
     * @return array Returns the error, if there was one.
     */
    public function lastError()
    {
    }

    /**
     * Gets an array of all MongoCollections for this database
     *
     * @param bool $includeSystemCollections
     *
     * @return array Returns an array of MongoCollection objects.
     */
    public function listCollections($includeSystemCollections = false)
    {
    }

    /**
     * Checks for the last error thrown during a database operation
     *
     * @return array Returns the error and the number of operations ago it occurred.
     */
    public function prevError()
    {
    }

    /**
     * Repairs and compacts this database
     *
     * @param bool $preserve_cloned_files
     * @param bool $backup_original_files
     *
     * @return array Returns db response.
     */
    public function repair($preserve_cloned_files = false, $backup_original_files = false)
    {
    }

    /**
     * Clears any flagged errors on the database
     *
     * @return array Returns the database response.
     */
    public function resetError()
    {
    }

    /**
     * Gets a collection
     *
     * @param string $name
     *
     * @return MongoCollection Returns a new collection object.
     */
    public function selectCollection($name)
    {
    }

    /**
     * Sets this databaseaposs profiling level
     *
     * @param int $level
     *
     * @return int Returns the previous profiling level.
     */
    public function setProfilingLevel($level)
    {
    }

    /**
     * Set the read preference for this database
     *
     * @param string $read_preference
     * @param array $tags
     *
     * @return bool
     */
    public function setReadPreference($read_preference, $tags = array())
    {
    }

    /**
     * Change slaveOkay setting for this database
     *
     * @param bool $ok
     *
     * @return bool Returns the former value of slaveOkay for this instance.
     */
    public function setSlaveOkay($ok = true)
    {
    }
}