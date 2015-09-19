<?php

/**
 * eWAY Payment Gateway
 */

namespace XiNG\eWAY\Payment;

/**
 * Interface PaymentInterface
 * @package XiNG\eWAY\Payment
 */
interface PaymentInterface
{
    /**
     * Initialize eWAY gateway with parameters
     */
    public function initialize(array $parameters = array());

    /**
     * Get all eWAY gateway parameters.
     * @return array
     */
    public function getParameters();

    /**
     * Define eWAY gateway parameters
     * @return mixed
     */
    public function getDefaultParameters();
}
