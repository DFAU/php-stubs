<?php

namespace XMLDiff;

/** @phpstub */
class File extends \XMLDiff\Base
{
    /**
     * Diff two XML files
     *
     * @param string $from
     * @param string $to
     *
     * @return string String with the XML document containing the diff information or NULL.
     */
    public function diff($from, $to)
    {
    }

    /**
     * Produce merged XML document
     *
     * @param string $src
     * @param string $diff
     *
     * @return string String with the new XML document or NULL.
     */
    public function merge($src, $diff)
    {
    }
}