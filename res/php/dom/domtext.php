<?php

/** @phpstub */
class DOMText extends \DOMCharacterData
{
    /** @var string */
    public $wholeText;

    /**
     * 
       Creates a new ``DOMText`` object
      
     */
    public function __construct()
    {
    }

    /**
     * 
       Indicates whether this text node contains whitespace
      
     *
     * @return bool Returns true if node contains zero or more whitespace characters and
     *              nothing else. Returns false otherwise.
     */
    public function isWhitespaceInElementContent()
    {
    }

    /**
     * 
       Breaks this node into two nodes at the specified offset
      
     *
     * @param int $offset
     *
     * @return DOMText The new node of the same type, which contains all the content at and after the
     *                 .
     */
    public function splitText($offset)
    {
    }
}