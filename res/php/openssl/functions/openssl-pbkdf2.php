<?php

/**
 * Generates a PKCS5 v2 PBKDF2 string, defaults to SHA-1
 *
 * @phpstub
 *
 * @param string $password
 * @param string $salt
 * @param int $key_length
 * @param int $iterations
 * @param string $digest_algorithm
 *
 * @return string Returns string.
 */
function openssl_pbkdf2($password, $salt, $key_length, $iterations, $digest_algorithm = NULL)
{
}