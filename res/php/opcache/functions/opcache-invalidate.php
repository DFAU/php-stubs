<?php

/**
 * Invalidates a cached script
 *
 * @phpstub
 *
 * @param string $script
 * @param boolean $force
 *
 * @return boolean Returns true if the opcode cache for  was
 *                 invalidated or if there was nothing to invalidate, or false if the opcode
 *                 cache is disabled.
 */
function opcache_invalidate($script, $force = false)
{
}