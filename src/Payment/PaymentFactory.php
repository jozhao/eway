<?php

/**
 * eWAY Payment Gateway
 */

namespace eWAY\Payment;

use eWAY\Common\Helper;
use eWAY\Exception\RuntimeException;

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
    static function create($payment, $parameters = array())
    {
        $class = Helper::getMethodClassName($payment);
        if (!class_exists($class)) {
            throw new RuntimeException("Class '$class' not found");
        }

        return new $class($parameters);
    }
}
