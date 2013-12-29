<?php

/** @phpstub */
class IntlPartsIterator extends \IntlIterator implements \Iterator
{
    const KEY_LEFT = 1;
    const KEY_RIGHT = 2;
    const KEY_SEQUENTIAL = 0;

    /**
     * Get IntlBreakIterator backing this parts iterator
     *
     * @return ReturnType 
     */
    public function getBreakIterator()
    {
    }
}