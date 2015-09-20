<?php

/**
 * eWAY Payment Gateway
 */

namespace XiNG\eWAY\Payment;

/**
 * Interface PaymentFactoryInterface
 * @package XiNG\eWAY\Payment
 */
interface PaymentFactoryInterface
{
    static function create($payment, $parameters = array());
}
