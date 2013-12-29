<?php

/** @phpstub */
class EventBuffer
{
    const EOL_ANY = 0;
    const EOL_CRLF = 1;
    const EOL_CRLF_STRICT = 2;
    const EOL_LF = 3;
    const PTR_ADD = 1;
    const PTR_SET = 0;

    /** @var int */
    public $length;

    /** @var int */
    public $contiguous_space;

    /**
     * Constructs EventBuffer object
     */
    public function __construct()
    {
    }

    /**
     * Append data to the end of an event buffer
     *
     * @param string $data
     *
     * @return bool Returns true on success. Otherwise false.
     */
    public function add($data)
    {
    }

    /**
     * Move all data from a buffer provided to the current instance of EventBuffer
     *
     * @param EventBuffer $buf
     *
     * @return bool Returns true on success. Otherwise false.
     */
    public function addBuffer($buf)
    {
    }

    /**
     * Moves the specified number of bytes from a source buffer to the
      end of the current buffer
     *
     * @param EventBuffer $buf
     * @param int $len
     *
     * @return int Returns the number of bytes read.
     */
    public function appendFrom($buf, $len)
    {
    }

    /**
     * Copies out specified number of bytes from the front of the buffer
     *
     * @param string $data
     * @param int $max_bytes
     *
     * @return int Returns the number of bytes copied, or
     *             
     *             on failure.
     */
    public function copyout(&$data, $max_bytes)
    {
    }

    /**
     * Removes specified number of bytes from the front of the buffer
      without copying it anywhere
     *
     * @param int $len
     *
     * @return void Returns true on success. Otherwise false.
     */
    public function drain($len)
    {
    }

    /**
     * 
     *
     * @return void 
     */
    public function enableLocking()
    {
    }

    /**
     * Reserves space in buffer
     *
     * @param int $len
     *
     * @return bool Returns true on success. Otherwise false.
     */
    public function expand($len)
    {
    }

    /**
     * Prevent calls that modify an event buffer from succeeding
     *
     * @param bool $at_front
     *
     * @return bool Returns true on success. Otherwise false.
     */
    public function freeze($at_front)
    {
    }

    /**
     * Acquires a lock on buffer
     *
     * @return void Returns true on success. Otherwise false.
     */
    public function lock()
    {
    }

    /**
     * Prepend data to the front of the buffer
     *
     * @param string $data
     *
     * @return bool Returns true on success. Otherwise false.
     */
    public function prepend($data)
    {
    }

    /**
     * Moves all data from source buffer to the front of current buffer
     *
     * @param EventBuffer $buf
     *
     * @return bool Returns true on success. Otherwise false.
     */
    public function prependBuffer($buf)
    {
    }

    /**
     * Linearizes data within buffer
      and returns it's contents as a string
     *
     * @param string $size
     *
     * @return void If
     *              
     *              is greater than the number of bytes in the buffer, the function returns
     *              null. Otherwise,
     *              
     *              returns string.
     */
    public function pullup($size)
    {
    }

    /**
     * Read data from an evbuffer and drain the bytes read
     *
     * @param int $max_bytes
     *
     * @return string Returns string read, or false on failure.
     */
    public function read($max_bytes)
    {
    }

    /**
     * Read data from a file onto the end of the buffer
     *
     * @param mixed $fd
     * @param int $howmuch
     *
     * @return string Returns the number of bytes read, or false on failure.
     */
    public function readFrom($fd, $howmuch)
    {
    }

    /**
     * Extracts a line from the front of the buffer
     *
     * @param string $eol_style
     *
     * @return void On success returns the line read from the buffer, otherwise null.
     */
    public function readLine($eol_style)
    {
    }

    /**
     * Scans the buffer for an occurrence of a string
     *
     * @param string $what
     * @param int $start
     * @param int $end
     *
     * @return mixed Returns numeric position of the first occurance of the string in the
     *               buffer, or false if string is not found.
     */
    public function search($what, $start = -1, $end = -1)
    {
    }

    /**
     * Scans the buffer for an occurrence of an end of line
     *
     * @param int $start
     * @param int $eol_style
     *
     * @return mixed Returns numeric position of the first occurance of end-of-line symbol in
     *               the buffer, or false if not found.
     */
    public function searchEol($start = -1, $eol_style = false)
    {
    }

    /**
     * Substracts a portion of the buffer data
     *
     * @param int $start
     * @param int $length
     *
     * @return string Returns the data substracted as a
     *                ``string``
     *                on success, or false on failure.
     */
    public function substr($start, $length = NULL)
    {
    }

    /**
     * Re-enable calls that modify an event buffer
     *
     * @param bool $at_front
     *
     * @return bool Returns true on success. Otherwise false.
     */
    public function unfreeze($at_front)
    {
    }

    /**
     * Releases lock acquired by EventBuffer::lock
     *
     * @return bool Returns true on success. Otherwise false.
     */
    public function unlock()
    {
    }

    /**
     * Write contents of the buffer to a file or socket
     *
     * @param mixed $fd
     * @param int $howmuch
     *
     * @return void Returns the number of bytes written, or false on error.
     */
    public function write($fd, $howmuch = NULL)
    {
    }
}