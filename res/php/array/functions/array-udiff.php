<?php

/**
 * Computes the difference of arrays by using a callback function for data comparison
 *
 * @phpstub-variable-parameters
 * @phpstub
 *
 * @param array $array1
 * @param array $array2
 * @param array $_
 * @param callable $value_compare_func
 *
 * @return array Returns an array containing all the values of
 *               that are not present in any of the other arguments.
 */
function array_udiff($array1, $array2, $_ = array(), $value_compare_func)
{
}