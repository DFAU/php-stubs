<?php

namespace XMLDiff;

/** @phpstub */
class Base
{
    /**
     * Constructor
     *
     * @param string $nsname
     */
    public function __construct($nsname)
    {
    }

    /**
     * Produce diff of two XML documents
     *
     * @param mixed $from
     * @param mixed $to
     *
     * @return mixed Implementation dependent.
     */
    public function diff($from, $to)
    {
    }

    /**
     * Produce new XML document based on diff
     *
     * @param mixed $src
     * @param mixed $diff
     *
     * @return mixed Implementation dependent.
     */
    public function merge($src, $diff)
    {
    }
}