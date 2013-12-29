<?php

/** @phpstub */
class UConverter
{
    const BOCU1 = 28;
    const CESU8 = 31;
    const DBCS = 1;
    const EBCDIC_STATEFUL = 9;
    const HZ = 23;
    const IMAP_MAILBOX = 32;
    const ISCII = 25;
    const ISO_2022 = 10;
    const LATIN_1 = 3;
    const LMBCS_1 = 11;
    const LMBCS_11 = 18;
    const LMBCS_16 = 19;
    const LMBCS_17 = 20;
    const LMBCS_18 = 21;
    const LMBCS_19 = 22;
    const LMBCS_2 = 12;
    const LMBCS_3 = 13;
    const LMBCS_4 = 14;
    const LMBCS_5 = 15;
    const LMBCS_6 = 16;
    const LMBCS_8 = 17;
    const LMBCS_LAST = 22;
    const MBCS = 2;
    const REASON_CLONE = 5;
    const REASON_CLOSE = 4;
    const REASON_ILLEGAL = 1;
    const REASON_IRREGULAR = 2;
    const REASON_RESET = 3;
    const REASON_UNASSIGNED = 0;
    const SBCS = 0;
    const SCSU = 24;
    const UNSUPPORTED_CONVERTER = -1;
    const US_ASCII = 26;
    const UTF16 = 29;
    const UTF16_BigEndian = 5;
    const UTF16_LittleEndian = 6;
    const UTF32 = 30;
    const UTF32_BigEndian = 7;
    const UTF32_LittleEndian = 8;
    const UTF7 = 27;
    const UTF8 = 4;

    /**
     * Create UConverter object
     *
     * @param string $destination_encoding
     * @param string $source_encoding
     */
    public function __construct($destination_encoding = NULL, $source_encoding = NULL)
    {
    }

    /**
     * Convert string from one charset to another
     *
     * @param string $str
     * @param bool $reverse
     *
     * @return string 
     */
    public function convert($str, $reverse = NULL)
    {
    }

    /**
     * Default "from" callback function
     *
     * @param integer $reason
     * @param string $source
     * @param string $codePoint
     * @param integer $error
     *
     * @return mixed 
     */
    public function fromUCallback($reason, $source, $codePoint, &$error)
    {
    }

    /**
     * Get the aliases of the given name
     *
     * @param string $name
     *
     * @return array 
     */
    public function getAliases($name = NULL)
    {
    }

    /**
     * Get the available canonical converter names
     *
     * @return array 
     */
    public function getAvailable()
    {
    }

    /**
     * Get the destination encoding
     *
     * @return string 
     */
    public function getDestinationEncoding()
    {
    }

    /**
     * Get the destination converter type
     *
     * @return integer 
     */
    public function getDestinationType()
    {
    }

    /**
     * Get last error code on the object
     *
     * @return integer 
     */
    public function getErrorCode()
    {
    }

    /**
     * Get last error message on the object
     *
     * @return string 
     */
    public function getErrorMessage()
    {
    }

    /**
     * Get the source encoding
     *
     * @return string 
     */
    public function getSourceEncoding()
    {
    }

    /**
     * Get the source convertor type
     *
     * @return integer 
     */
    public function getSourceType()
    {
    }

    /**
     * Get standards associated to converter names
     *
     * @return array 
     */
    public function getStandards()
    {
    }

    /**
     * Get substitution chars
     *
     * @return string 
     */
    public function getSubstChars()
    {
    }

    /**
     * Get string representation of the callback reason
     *
     * @param integer $reason
     *
     * @return string 
     */
    public function reasonText($reason = NULL)
    {
    }

    /**
     * Set the destination encoding
     *
     * @param string $encoding
     *
     * @return void 
     */
    public function setDestinationEncoding($encoding)
    {
    }

    /**
     * Set the source encoding
     *
     * @param string $encoding
     *
     * @return void 
     */
    public function setSourceEncoding($encoding)
    {
    }

    /**
     * Set the substitution chars
     *
     * @param string $chars
     *
     * @return void 
     */
    public function setSubstChars($chars)
    {
    }

    /**
     * Default "to" callback function
     *
     * @param integer $reason
     * @param string $source
     * @param string $codeUnits
     * @param integer $error
     *
     * @return mixed 
     */
    public function toUCallback($reason, $source, $codeUnits, &$error)
    {
    }

    /**
     * Convert string from one charset to another
     *
     * @param string $str
     * @param string $toEncoding
     * @param string $fromEncoding
     * @param array $options
     *
     * @return string 
     */
    public function transcode($str, $toEncoding, $fromEncoding, $options = array())
    {
    }
}