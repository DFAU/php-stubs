<?php

/** @phpstub */
class ZMQPoll
{
    /**
     * Add item to the poll set
     *
     * @param mixed $entry
     * @param integer $type
     *
     * @return string Returns a string id of the added item which can be later used to remove the item.
     *                Throws ZMQPollException on error.
     */
    public function add($entry, $type)
    {
    }

    /**
     * Clear the poll set
     *
     * @return ZMQPoll Returns the current object.
     */
    public function clear()
    {
    }

    /**
     * Count items in the poll set
     *
     * @return integer Returns an integer representing the amount of items in the poll set.
     */
    public function count()
    {
    }

    /**
     * Get poll errors
     *
     * @return array Returns an array containing ids for the items that had errors in the last poll. Empty array is
     *               returned if there were no errors.
     */
    public function getLastErrors()
    {
    }

    /**
     * Poll the items
     *
     * @param array $readable
     * @param array $writable
     * @param integer $timeout
     *
     * @return integer Returns an integer representing amount of items with activity. Throws ZMQPollException on error.
     */
    public function poll(&$readable, &$writable, $timeout = -1)
    {
    }

    /**
     * Remove item from poll set
     *
     * @param mixed $item
     *
     * @return boolean Returns true if the item was removed and false if the object
     *                 with given id does not exist in the poll set.
     */
    public function remove($item)
    {
    }
}