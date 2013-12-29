<?php

/** @phpstub */
class OCI-Lob
{
    /**
     * Appends data from the large object to another large object
     *
     * @param OCI-Lob $lob_from
     *
     * @return bool 
     */
    public function append($lob_from)
    {
    }

    /**
     * Closes LOB descriptor
     *
     * @return bool 
     */
    public function close()
    {
    }

    /**
     * Tests for end-of-file on a large object's descriptor
     *
     * @return bool Returns true if internal pointer of large object is at the end of LOB.
     *              Otherwise returns false.
     */
    public function eof()
    {
    }

    /**
     * Erases a specified portion of the internal LOB data
     *
     * @param int $offset
     * @param int $length
     *
     * @return int Returns the actual number of characters/bytes erased .
     */
    public function erase($offset = NULL, $length = NULL)
    {
    }

    /**
     * Exports LOB's contents to a file
     *
     * @param string $filename
     * @param int $start
     * @param int $length
     *
     * @return bool 
     */
    public function export($filename, $start = NULL, $length = NULL)
    {
    }

    /**
     * Flushes/writes buffer of the LOB to the server
     *
     * @param int $flag
     *
     * @return bool 
     */
    public function flush($flag = NULL)
    {
    }

    /**
     * Frees resources associated with the LOB descriptor
     *
     * @return bool 
     */
    public function free()
    {
    }

    /**
     * Returns current state of buffering for the large object
     *
     * @return bool Returns false if buffering for the large object is off and true if
     *              buffering is used.
     */
    public function getBuffering()
    {
    }

    /**
     * Imports file data to the LOB
     *
     * @param string $filename
     *
     * @return bool 
     */
    public function import($filename)
    {
    }

    /**
     * Returns large object's contents
     *
     * @return string Returns the contents of the object, or false on errors.
     */
    public function load()
    {
    }

    /**
     * Reads part of the large object
     *
     * @param int $length
     *
     * @return string Returns the contents as a string, .
     */
    public function read($length)
    {
    }

    /**
     * Moves the internal pointer to the beginning of the large object
     *
     * @return bool 
     */
    public function rewind()
    {
    }

    /**
     * Saves data to the large object
     *
     * @param string $data
     * @param int $offset
     *
     * @return bool 
     */
    public function save($data, $offset = NULL)
    {
    }

    /**
     * Alias 
     */
    public function saveFile()
    {
    }

    /**
     * Sets the internal pointer of the large object
     *
     * @param int $offset
     * @param int $whence
     *
     * @return bool 
     */
    public function seek($offset, $whence = false)
    {
    }

    /**
     * Changes current state of buffering for the large object
     *
     * @param bool $on_off
     *
     * @return bool Repeated calls to this method with the same flag will
     *              return true.
     */
    public function setBuffering($on_off)
    {
    }

    /**
     * Returns size of large object
     *
     * @return int Returns length of large object value .
     *             Empty objects have zero length.
     */
    public function size()
    {
    }

    /**
     * Returns the current position of internal pointer of large object
     *
     * @return int Returns current position of a LOB's internal pointer or false if an
     *             error occurred.
     */
    public function tell()
    {
    }

    /**
     * Truncates large object
     *
     * @param int $length
     *
     * @return bool 
     */
    public function truncate($length = false)
    {
    }

    /**
     * Writes data to the large object
     *
     * @param string $data
     * @param int $length
     *
     * @return int Returns the number of bytes written .
     */
    public function write($data, $length = NULL)
    {
    }

    /**
     * Writes a temporary large object
     *
     * @param string $data
     * @param int $lob_type
     *
     * @return bool 
     */
    public function writeTemporary($data, $lob_type = false)
    {
    }

    /**
     * Alias 
     */
    public function writeToFile()
    {
    }
}