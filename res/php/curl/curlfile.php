<?php

/** @phpstub */
class CURLFile
{
    public $postname;
    public $name;
    public $mime;

    /**
     * Create a CURLFile object
     *
     * @param string $filename
     * @param string $mimetype
     * @param string $postname
     * @param string $filename
     * @param string $mimetype
     * @param string $postname
     *
     * @return CURLFile Returns a ``CURLFile`` object.
     */
    public function __construct($filename, $mimetype = NULL, $postname = NULL, $filename, $mimetype = NULL, $postname = NULL)
    {
    }

    /**
     * Unserialization handler
     *
     * @return void 
     */
    public function __wakeup()
    {
    }

    /**
     * Get file name
     *
     * @return string Returns file name.
     */
    public function getFilename()
    {
    }

    /**
     * Get MIME type
     *
     * @return string Returns MIME type.
     */
    public function getMimeType()
    {
    }

    /**
     * Get file name for POST
     *
     * @return string Returns file name for POST.
     */
    public function getPostFilename()
    {
    }

    /**
     * Set MIME type
     *
     * @param string $mime
     *
     * @return void 
     */
    public function setMimeType($mime)
    {
    }

    /**
     * Set file name for POST
     *
     * @param string $postname
     *
     * @return void 
     */
    public function setPostFilename($postname)
    {
    }
}