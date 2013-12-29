<?php

/**
 * Pick one or more random entries out of an array
 *
 * @phpstub
 *
 * @param array $array
 * @param int $num
 *
 * @return mixed When picking only one entry,  returns
 *               the key for a random entry. Otherwise, an array of keys for the random
 *               entries is returned. This is done so that random keys can be picked
 *               from the array as well as random values. Trying to pick more elements
 *               than there are in the array will result in an
 *               level error, and NULL will be returned.
 */
function array_rand($array, $num = 1)
{
}