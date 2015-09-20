<?php

/**
 * eWAY Payment Gateway
 */

namespace XiNG\eWAY\Payment;

use XiNG\eWAY\Common\Helper;
use XiNG\eWAY\Exception\RuntimeException;

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
