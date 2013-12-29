<?php

/**
 * Encrypt a PHP script with BLENC.
 *
 * @phpstub
 *
 * @param string $plaintext
 * @param string $encodedfile
 * @param string $encryption_key
 *
 * @return string BLENC will return the redistributable key that must be saved into key_file:
 *                the path of key_file is specified at runtime with the option blenc.key_file
 */
function blenc_encrypt($plaintext, $encodedfile, $encryption_key = NULL)
{
}