<?php

/**
 * Retrieve the system error message associated with the given errno
 *
 * @phpstub
 *
 * @param int $errno
 *
 * @return string Returns error description on success.
 */
function pcntl_strerror($errno)
{
}

/**
 * Retrieve the system error message associated with the given errno
 *
 * @phpstub-alias-of pcntl_strerror
 * @phpstub
 *
 * @param int $errno
 *
 * @return string Returns error description on success.
 */
function pcntl_errno($errno)
{
}