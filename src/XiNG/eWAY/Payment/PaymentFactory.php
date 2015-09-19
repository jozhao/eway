<?php

/**
 * eWAY Payment Gateway
 */

namespace XiNG\eWAY\Payment;

/**
 * Class PaymentFactory
 * @package XiNG\eWAY\Payment
 */
class PaymentFactory implements PaymentFactoryInterface
{
    /**
     * @param $payment
     * @param $configs
     * @return Payment
     */
    static function createPayment($payment, $parameters = array())
    {
        return new Payment($payment, $parameters);
    }
}
