<?php

/** @phpstub */
class DateTimeImmutable implements \DateTimeInterface
{
    /**
     * Returns new DateTimeImmutable object
     *
     * @param string $time
     * @param DateTimeZone $timezone
     *
     * @return DateTimeImmutable
     */
    public function __construct($time = 'now', $timezone = NULL)
    {
    }

    /**
     * The __set_state handler
     *
     * @param array $array
     *
     * @return DateTimeImmutable
     */
    public function __set_state($array)
    {
    }

    /**
     * 
       Adds an amount of days, months, years, hours, minutes and seconds
      
     *
     * @param DateInterval $interval
     *
     * @return DateTimeImmutable
     */
    public function add($interval)
    {
    }

    /**
     * Returns new DateTimeImmutable object formatted according to the specified format
     *
     * @param string $format
     * @param string $time
     * @param DateTimeZone $timezone
     * @param string $format
     * @param string $time
     * @param DateTimeZone $timezone
     *
     * @return DateTimeImmutable
     */
    public function createFromFormat($format, $time, $timezone = NULL, $format, $time, $timezone = NULL)
    {
    }

    /**
     * Returns the warnings and errors
     *
     * @return array
     */
    public function getLastErrors()
    {
    }

    /**
     * Alters the timestamp
     *
     * @param string $modify
     *
     * @return DateTimeImmutable
     */
    public function modify($modify)
    {
    }

    /**
     * Sets the date
     *
     * @param int $year
     * @param int $month
     * @param int $day
     *
     * @return DateTimeImmutable
     */
    public function setDate($year, $month, $day)
    {
    }

    /**
     * Sets the ISO date
     *
     * @param int $year
     * @param int $week
     * @param int $day
     *
     * @return DateTimeImmutable
     */
    public function setISODate($year, $week, $day = 1)
    {
    }

    /**
     * Sets the time
     *
     * @param int $hour
     * @param int $minute
     * @param int $second
     *
     * @return DateTimeImmutable
     */
    public function setTime($hour, $minute, $second = false)
    {
    }

    /**
     * Sets the date and time based on an Unix timestamp
     *
     * @param int $unixtimestamp
     *
     * @return DateTimeImmutable
     */
    public function setTimestamp($unixtimestamp)
    {
    }

    /**
     * Sets the time zone
     *
     * @param DateTimeZone $timezone
     *
     * @return DateTimeImmutable
     */
    public function setTimezone($timezone)
    {
    }

    /**
     * 
       Subtracts an amount of days, months, years, hours, minutes and seconds
      
     *
     * @param DateInterval $interval
     *
     * @return DateTimeImmutable
     */
    public function sub($interval)
    {
    }
}