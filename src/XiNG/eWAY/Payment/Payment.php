<?php

/**
 * eWAY Payment Gateway
 */

namespace XiNG\eWAY\Payment;

/**
 * Class Payment
 * @package XiNG\eWAY
 */
class Payment extends PaymentAbstract implements PaymentInterface
{
    /**
     * @param $payment
     * @param array $parameters
     */
    public function __construct($payment, $parameters = array())
    {

    }

    /**
     * @param array $parameters
     * @return $this
     */
    public function initialize(array $parameters = array())
    {
        return $this;
    }
}
