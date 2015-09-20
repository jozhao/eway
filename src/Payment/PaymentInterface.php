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
     * @param array $parameters
     * @return mixed
     */
    public function initialize(array $parameters = array());

    /**
     * @return mixed
     */
    public function getMethod();

    /**
     * @return mixed
     */
    public function getMethodName();

    /**
     * @return mixed
     */
    public function getParameters();

    /**
     * @return mixed
     */
    public function getDefaultParameters();
}
