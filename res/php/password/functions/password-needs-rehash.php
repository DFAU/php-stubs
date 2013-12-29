<?php

/**
 * Checks if the given hash matches the given options
 *
 * @phpstub
 *
 * @param string $hash
 * @param string $algo
 * @param string $options
 *
 * @return boolean Returns true if the hash should be rehashed to match the given
 *                 and , or false
 *                 otherwise.
 */
function password_needs_rehash($hash, $algo, $options = NULL)
{
}