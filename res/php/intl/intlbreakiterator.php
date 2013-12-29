<?php

/** @phpstub */
class IntlBreakIterator implements \Traversable
{
    const DONE = -1;
    const LINE_HARD = 100;
    const LINE_HARD_LIMIT = 200;
    const LINE_SOFT = 0;
    const LINE_SOFT_LIMIT = 100;
    const SENTENCE_SEP = 100;
    const SENTENCE_SEP_LIMIT = 200;
    const SENTENCE_TERM = 0;
    const SENTENCE_TERM_LIMIT = 100;
    const WORD_IDEO = 400;
    const WORD_IDEO_LIMIT = 500;
    const WORD_KANA = 300;
    const WORD_KANA_LIMIT = 400;
    const WORD_LETTER = 200;
    const WORD_LETTER_LIMIT = 300;
    const WORD_NONE = 0;
    const WORD_NONE_LIMIT = 100;
    const WORD_NUMBER = 100;
    const WORD_NUMBER_LIMIT = 200;

    /**
     * Private constructor for disallowing instantiation
     */
    public function __construct()
    {
    }

    /**
     * 
       Create break iterator for boundaries of combining character sequences
      
     *
     * @param string $"locale"
     *
     * @return ReturnType 
     */
    public function createCharacterInstance($"locale" = NULL)
    {
    }

    /**
     * Create break iterator for boundaries of code points
     *
     * @return ReturnType 
     */
    public function createCodePointInstance()
    {
    }

    /**
     * 
       Create break iterator for logically possible line breaks
      
     *
     * @param string $"locale"
     *
     * @return ReturnType 
     */
    public function createLineInstance($"locale" = NULL)
    {
    }

    /**
     * Create break iterator for sentence breaks
     *
     * @param string $"locale"
     *
     * @return ReturnType 
     */
    public function createSentenceInstance($"locale" = NULL)
    {
    }

    /**
     * Create break iterator for title-casing breaks
     *
     * @param string $"locale"
     *
     * @return ReturnType 
     */
    public function createTitleInstance($"locale" = NULL)
    {
    }

    /**
     * Create break iterator for word breaks
     *
     * @param string $"locale"
     *
     * @return ReturnType 
     */
    public function createWordInstance($"locale" = NULL)
    {
    }

    /**
     * Get index of current position
     *
     * @return ReturnType 
     */
    public function current()
    {
    }

    /**
     * Set position to the first character in the text
     *
     * @return ReturnType 
     */
    public function first()
    {
    }

    /**
     * 
       Advance the iterator to the first boundary following specified offset
      
     *
     * @param string $"offset"
     *
     * @return ReturnType 
     */
    public function following($"offset")
    {
    }

    /**
     * Get last error code on the object
     *
     * @return ReturnType 
     */
    public function getErrorCode()
    {
    }

    /**
     * Get last error message on the object
     *
     * @return ReturnType 
     */
    public function getErrorMessage()
    {
    }

    /**
     * Get the locale associated with the object
     *
     * @param string $"locale_type"
     *
     * @return ReturnType 
     */
    public function getLocale($"locale_type")
    {
    }

    /**
     * Create iterator for navigating fragments between boundaries
     *
     * @param string $"key_type"
     *
     * @return ReturnType 
     */
    public function getPartsIterator($"key_type" = NULL)
    {
    }

    /**
     * Get the text being scanned
     *
     * @return ReturnType 
     */
    public function getText()
    {
    }

    /**
     * Tell whether an offset is a boundaryʼs offset
     *
     * @param string $"offset"
     *
     * @return ReturnType 
     */
    public function isBoundary($"offset")
    {
    }

    /**
     * Set the iterator position to index beyond the last character
     *
     * @return ReturnType 
     */
    public function last()
    {
    }

    /**
     * Advance the iterator the next boundary
     *
     * @param string $"offset"
     *
     * @return ReturnType 
     */
    public function next($"offset" = NULL)
    {
    }

    /**
     * Set the iterator position to the first boundary before an offset
     *
     * @param string $"offset"
     *
     * @return ReturnType 
     */
    public function preceding($"offset")
    {
    }

    /**
     * Set the iterator position to the boundary immediately before the current
     *
     * @return ReturnType 
     */
    public function previous()
    {
    }

    /**
     * Set the text being scanned
     *
     * @param string $"text"
     *
     * @return ReturnType 
     */
    public function setText($"text")
    {
    }
}