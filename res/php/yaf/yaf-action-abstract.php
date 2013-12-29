<?php

/** @phpstub */
class Yaf_Action_Abstract extends \Yaf_Controller_Abstract
{
    protected $_controller;

    /**
     * Action entry point
     *
     * @phpstub-variable-parameters
     *
     * @param mixed $arg
     * @param mixed $_
     *
     * @return mixed 
     */
    public function execute($arg = NULL, $_ = NULL)
    {
    }

    /**
     * Retrieve controller object
     *
     * @return Yaf_Controller_Abstract instance
     */
    public function getController()
    {
    }
}