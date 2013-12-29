<?php

/** @phpstub */
class ReflectionParameter implements \Reflector
{
    public $name;

    /**
     * Clone
     *
     * @return void 
     */
    public function __clone()
    {
    }

    /**
     * Construct
     *
     * @param string $function
     * @param string $parameter
     */
    public function __construct($function, $parameter)
    {
    }

    /**
     * To string
     *
     * @return string 
     */
    public function __toString()
    {
    }

    /**
     * Checks if null is allowed
     *
     * @return bool true if null is allowed, otherwise false
     */
    public function allowsNull()
    {
    }

    /**
     * Returns whether this parameter can be passed by value
     *
     * @return bool Returns true if the parameter can be passed by value, false otherwise.
     *              Returns null in case of an error.
     */
    public function canBePassedByValue()
    {
    }

    /**
     * Exports
     *
     * @param string $function
     * @param string $parameter
     * @param bool $return
     *
     * @return string The exported reflection.
     */
    public function export($function, $parameter, $return = NULL)
    {
    }

    /**
     * Get the type hinted class
     *
     * @return ReflectionClass A ``ReflectionClass`` object.
     */
    public function getClass()
    {
    }

    /**
     * Gets declaring class
     *
     * @return ReflectionClass A ``ReflectionClass`` object.
     */
    public function getDeclaringClass()
    {
    }

    /**
     * Gets declaring function
     *
     * @return ReflectionFunctionAbstract A ``ReflectionFunction`` object.
     */
    public function getDeclaringFunction()
    {
    }

    /**
     * Gets default parameter value
     *
     * @return scalar|array|null The parameters default value.
     */
    public function getDefaultValue()
    {
    }

    /**
     * Returns the default value's constant name if default value is constant or null
     *
     * @return string Returns string on success or null on failure.
     */
    public function getDefaultValueConstantName()
    {
    }

    /**
     * Gets parameter name
     *
     * @return string The name of the reflected parameter.
     */
    public function getName()
    {
    }

    /**
     * Gets parameter position
     *
     * @return int The position of the parameter, left to right, starting at position #0.
     */
    public function getPosition()
    {
    }

    /**
     * Checks if parameter expects an array
     *
     * @return bool true if an ``array`` is expected, false otherwise.
     */
    public function isArray()
    {
    }

    /**
     * Returns whether parameter MUST be callable
     *
     * @return bool Returns true if the parameter is ``callable``, false if it is
     *              not or null on failure.
     */
    public function isCallable()
    {
    }

    /**
     * Checks if a default value is available
     *
     * @return bool true if a default value is available, otherwise false
     */
    public function isDefaultValueAvailable()
    {
    }

    /**
     * Returns whether the default value of this parameter is constant
     *
     * @return bool Returns true if the default value is constant, false if it is not or
     *              null on failure.
     */
    public function isDefaultValueConstant()
    {
    }

    /**
     * Checks if optional
     *
     * @return bool true if the parameter is optional, otherwise false
     */
    public function isOptional()
    {
    }

    /**
     * Checks if passed by reference
     *
     * @return bool true if the parameter is passed in by reference, otherwise false
     */
    public function isPassedByReference()
    {
    }
}