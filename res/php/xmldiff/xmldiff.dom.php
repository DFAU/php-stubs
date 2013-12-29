<?php

namespace XMLDiff;

/** @phpstub */
class DOM extends \XMLDiff\Base
{
    /**
     * Diff two DOMDocument objects
     *
     * @param DOMDocument $from
     * @param DOMDocument $to
     *
     * @return DOMDocument DOMDocument with the diff information or NULL.
     */
    public function diff($from, $to)
    {
    }

    /**
     * Produce merged DOMDocument
     *
     * @param DOMDocument $src
     * @param DOMDocument $diff
     *
     * @return DOMDocument Merged DOMDocument or NULL.
     */
    public function merge($src, $diff)
    {
    }
}