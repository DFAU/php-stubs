<?php

/** @phpstub */
class IntlTimeZone
{
    const DISPLAY_LONG = 2;
    const DISPLAY_SHORT = 1;

    /**
     * Get the number of IDs in the equivalency group that includes the given ID
     *
     * @param string $zoneId
     *
     * @return integer 
     */
    public function countEquivalentIDs($zoneId)
    {
    }

    /**
     * Create a new copy of the default timezone for this host
     *
     * @return IntlTimeZone 
     */
    public function createDefault()
    {
    }

    /**
     * Get an enumeration over time zone IDs associated with the
      given country or offset
     *
     * @param mixed $countryOrRawOffset
     *
     * @return IntlIterator 
     */
    public function createEnumeration($countryOrRawOffset = NULL)
    {
    }

    /**
     * Create a timezone object for the given ID
     *
     * @param string $zoneId
     *
     * @return IntlTimeZone 
     */
    public function createTimeZone($zoneId)
    {
    }

    /**
     * Create a timezone object from ``DateTimeZone``
     *
     * @param DateTimeZone $zoneId
     *
     * @return IntlTimeZone 
     */
    public function fromDateTimeZone($zoneId)
    {
    }

    /**
     * Get the canonical system timezone ID or the normalized custom time zone ID for the given time zone ID
     *
     * @param string $zoneId
     * @param bool $isSystemID
     *
     * @return string 
     */
    public function getCanonicalID($zoneId, &$isSystemID = NULL)
    {
    }

    /**
     * Get the amount of time to be added to local standard time to get local wall clock time
     *
     * @return integer 
     */
    public function getDSTSavings()
    {
    }

    /**
     * Get a name of this time zone suitable for presentation to the user
     *
     * @param bool $isDaylight
     * @param integer $style
     * @param string $locale
     *
     * @return string 
     */
    public function getDisplayName($isDaylight = NULL, $style = NULL, $locale = NULL)
    {
    }

    /**
     * Get an ID in the equivalency group that includes the given ID
     *
     * @param string $zoneId
     * @param integer $index
     *
     * @return string 
     */
    public function getEquivalentID($zoneId, $index)
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
     * Create GMT (UTC) timezone
     *
     * @return IntlTimeZone 
     */
    public function getGMT()
    {
    }

    /**
     * Get timezone ID
     *
     * @return string 
     */
    public function getID()
    {
    }

    /**
     * Get the time zone raw and GMT offset for the given moment in time
     *
     * @param float $date
     * @param bool $local
     * @param integer $rawOffset
     * @param integer $dstOffset
     *
     * @return integer 
     */
    public function getOffset($date, $local, &$rawOffset, &$dstOffset)
    {
    }

    /**
     * Get the raw GMT offset (before taking daylight savings time into account
     *
     * @return integer 
     */
    public function getRawOffset()
    {
    }

    /**
     * Get the timezone data version currently used by ICU
     *
     * @return string 
     */
    public function getTZDataVersion()
    {
    }

    /**
     * Check if this zone has the same rules and offset as another zone
     *
     * @param IntlTimeZone $otherTimeZone
     *
     * @return bool 
     */
    public function hasSameRules($otherTimeZone)
    {
    }

    /**
     * Convert to ``DateTimeZone`` object
     *
     * @return DateTimeZone 
     */
    public function toDateTimeZone()
    {
    }

    /**
     * Check if this time zone uses daylight savings time
     *
     * @return bool 
     */
    public function useDaylightTime()
    {
    }
}