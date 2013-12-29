<?php

/** @phpstub */
class PDOException extends \RuntimeException
{
    /** @var array */
    public $errorInfo;

    /** @var string */
    protected $code;
}