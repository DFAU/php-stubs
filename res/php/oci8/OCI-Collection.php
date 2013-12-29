<?php

/** @phpstub */
class OCI-Collection
{
    /**
     * Appends element to the collection
     *
     * @param mixed $value
     *
     * @return bool 
     */
    public function append($value)
    {
    }

    /**
     * Assigns a value to the collection from another existing collection
     *
     * @param OCI-Collection $from
     *
     * @return bool 
     */
    public function assign($from)
    {
    }

    /**
     * Assigns a value to the element of the collection
     *
     * @param int $index
     * @param mixed $value
     *
     * @return bool 
     */
    public function assignElem($index, $value)
    {
    }

    /**
     * Frees the resources associated with the collection object
     *
     * @return bool 
     */
    public function free()
    {
    }

    /**
     * Returns value of the element
     *
     * @param int $index
     *
     * @return mixed Returns false if such element doesn't exist; null if element is null;
     *               string if element is column of a string datatype or number if element is
     *               numeric field.
     */
    public function getElem($index)
    {
    }

    /**
     * Returns the maximum number of elements in the collection
     *
     * @return int Returns the maximum number as an integer, or false on errors.
     */
    public function max()
    {
    }

    /**
     * Returns size of the collection
     *
     * @return int Returns the number of elements in the collection or false on error.
     */
    public function size()
    {
    }

    /**
     * Trims elements from the end of the collection
     *
     * @param int $num
     *
     * @return bool 
     */
    public function trim($num)
    {
    }
}