<?php

/**
 * eWAY Payment Gateway
 */

namespace XiNG\eWAY\Payment;

use GuzzleHttp\ClientInterface;
use GuzzleHttp\Client as HttpClient;

/**
 * Class PaymentAbstract
 * @package XiNG\eWAY\Payment
 */
abstract class PaymentAbstract implements PaymentInterface
{
    protected $parameters;

    public function __construct()
    {

    }

    /**
     * @return mixed
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * @return array
     */
    public function getDefaultParameters()
    {
        return array();
    }

    /**
     * @param $key
     * @return null
     */
    public function getParameter($key)
    {
        return isset($this->parameters[$key]) ? $this->parameters[$key] : null;
    }

    /**
     * @param $key
     * @param $value
     * @return $this
     */
    public function setParameter($key, $value)
    {
        $this->parameters[$key] = $value;

        return $this;
    }
}
