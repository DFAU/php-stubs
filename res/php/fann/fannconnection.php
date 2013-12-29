<?php

/** @phpstub */
class FANNConnection
{
    public $weight;
    public $to_neuron;
    public $from_neuron;

    /**
     * The connection constructor
     *
     * @param int $from_neuron
     * @param int $to_neuron
     * @param float $weight
     */
    public function __construct($from_neuron, $to_neuron, $weight)
    {
    }

    /**
     * Returns the postions of starting neuron.
     *
     * @return int The postions of starting neuron.
     */
    public function getFromNeuron()
    {
    }

    /**
     * Returns the postions of terminating neuron
     *
     * @return int The postions of terminating neuron.
     */
    public function getToNeuron()
    {
    }

    /**
     * Returns the connection weight
     *
     * @return void The connection weight.
     */
    public function getWeight()
    {
    }

    /**
     * Sets the connections weight
     *
     * @param float $weight
     *
     * @return bool
     */
    public function setWeight($weight)
    {
    }
}