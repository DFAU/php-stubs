<?php

/**
 * Count all elements in an array, or something in an object
 *
 * @phpstub
 *
 * @param mixed $array_or_countable
 * @param int $mode
 *
 * @return int Returns the number of elements in .
 *             If the parameter is not an array or not an object with
 *             implemented ``Countable`` interface,
 *             will be returned.
 *             There is one exception, if  is null,
 *             will be returned.
 */
function count($array_or_countable, $mode = false)
{
}

/**
 * Count all elements in an array, or something in an object
 *
 * @phpstub-alias-of count
 * @phpstub
 *
 * @param mixed $array_or_countable
 * @param int $mode
 *
 * @return int Returns the number of elements in .
 *             If the parameter is not an array or not an object with
 *             implemented ``Countable`` interface,
 *             will be returned.
 *             There is one exception, if  is null,
 *             will be returned.
 */
function sizeof($array_or_countable, $mode = false)
{
}