<?php

/**
 * Returns the next child statement resource from a parent statement resource that has Oracle Database 12c Implicit Result Sets
 *
 * @phpstub
 *
 * @param resource $statement
 *
 * @return resource  Returns a statement handle for the next child statement available
 *                   on .  Returns false when child
 *                   statements do not exist, or all child statements have been returned
 *                   by previous calls
 *                   to .
 */
function oci_get_implicit_resultset($statement)
{
}