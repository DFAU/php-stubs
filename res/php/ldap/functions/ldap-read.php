<?php

/**
 * Read an entry
 *
 * @phpstub
 *
 * @param resource $link_identifier
 * @param string $base_dn
 * @param string $filter
 * @param array $attributes
 * @param int $attrsonly
 * @param int $sizelimit
 * @param int $timelimit
 * @param int $deref
 *
 * @return resource Returns a search result identifier or false on error.
 */
function ldap_read($link_identifier, $base_dn, $filter, $attributes = array(), $attrsonly = NULL, $sizelimit = NULL, $timelimit = NULL, $deref = NULL)
{
}