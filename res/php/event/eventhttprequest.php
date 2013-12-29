<?php

/** @phpstub */
class EventHttpRequest
{
    const CMD_CONNECT = 128;
    const CMD_DELETE = 16;
    const CMD_GET = 1;
    const CMD_HEAD = 4;
    const CMD_OPTIONS = 32;
    const CMD_PATCH = 256;
    const CMD_POST = 2;
    const CMD_PUT = 8;
    const CMD_TRACE = 64;
    const INPUT_HEADER = 1;
    const OUTPUT_HEADER = 2;

    /**
     * Constructs EventHttpRequest object
     *
     * @param callable $callback
     * @param mixed $data
     */
    public function __construct($callback, $data = NULL)
    {
    }

    /**
     * Adds an HTTP header to the headers of the request
     *
     * @param string $key
     * @param string $value
     * @param int $type
     *
     * @return bool Returns true on success. Otherwise false.
     */
    public function addHeader($key, $value, $type)
    {
    }

    /**
     * Cancels a pending HTTP request
     *
     * @return void 
     */
    public function cancel()
    {
    }

    /**
     * Removes all output headers from the header list of the request
     *
     * @return void 
     */
    public function clearHeaders()
    {
    }

    /**
     * Closes associated HTTP connection
     *
     * @return void 
     */
    public function closeConnection()
    {
    }

    /**
     * Finds the value belonging a header
     *
     * @param string $key
     * @param string $type
     *
     * @return void Returns null if header not found.
     */
    public function findHeader($key, $type)
    {
    }

    /**
     * Frees the object and removes associated events
     *
     * @return void 
     */
    public function free()
    {
    }

    /**
     * Returns EventBufferEvent object
     *
     * @return EventBufferEvent Returns
     *                          ``EventBufferEvent``
     *                          object.
     */
    public function getBufferEvent()
    {
    }

    /**
     * Returns the request command(method)
     *
     * @return void Returns the request command, one of
     *              
     *              constants.
     */
    public function getCommand()
    {
    }

    /**
     * Returns EventHttpConnection object
     *
     * @return EventHttpConnection Returns
     *                             ``EventHttpConnection``
     *                             object.
     */
    public function getConnection()
    {
    }

    /**
     * Returns the request host
     *
     * @return string Returns the request host.
     */
    public function getHost()
    {
    }

    /**
     * Returns the input buffer
     *
     * @return EventBuffer Returns the input buffer.
     */
    public function getInputBuffer()
    {
    }

    /**
     * Returns associative array of the input headers
     *
     * @return array Returns associative array of the input headers.
     */
    public function getInputHeaders()
    {
    }

    /**
     * Returns the output buffer of the request
     *
     * @return EventBuffer Returns the output buffer of the request.
     */
    public function getOutputBuffer()
    {
    }

    /**
     * Returns associative array of the input headers
     *
     * @return void 
     */
    public function getOutputHeaders()
    {
    }

    /**
     * Returns the the response code
     *
     * @return int Returns the response code of the request.
     */
    public function getResponseCode()
    {
    }

    /**
     * Returns the request URI
     *
     * @return string Returns the request URI
     */
    public function getUri()
    {
    }

    /**
     * Removes an HTTP header from the headers of the request
     *
     * @param string $key
     * @param string $type
     *
     * @return void Removes an HTTP header from the headers of the request.
     */
    public function removeHeader($key, $type)
    {
    }

    /**
     * Send an HTML error message to the client
     *
     * @param int $error
     * @param string $reason
     *
     * @return void 
     */
    public function sendError($error, $reason = NULL)
    {
    }

    /**
     * Send an HTML reply to the client
     *
     * @param int $code
     * @param string $reason
     * @param EventBuffer $buf
     *
     * @return void 
     */
    public function sendReply($code, $reason, $buf = NULL)
    {
    }

    /**
     * Send another data chunk as part of an ongoing chunked reply
     *
     * @param EventBuffer $buf
     *
     * @return void 
     */
    public function sendReplyChunk($buf)
    {
    }

    /**
     * Complete a chunked reply, freeing the request as appropriate
     *
     * @return void 
     */
    public function sendReplyEnd()
    {
    }

    /**
     * Initiate a chunked reply
     *
     * @param int $code
     * @param string $reason
     *
     * @return void 
     */
    public function sendReplyStart($code, $reason)
    {
    }
}