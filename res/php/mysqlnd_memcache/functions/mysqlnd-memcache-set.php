<?php

/**
 * Associate a MySQL connection with a Memcache connection
 *
 * @phpstub
 *
 * @param mixed $mysql_connection
 * @param Memcached $memcache_connection
 * @param string $pattern
 * @param callback $callback
 *
 * @return bool true if the association or disassociation is successful, otherwise false if there
 *              is an error.
 */
function mysqlnd_memcache_set($mysql_connection, $memcache_connection = NULL, $pattern = NULL, $callback = NULL)
{
}