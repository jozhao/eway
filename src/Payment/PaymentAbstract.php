<?php

/**
 * eWAY Payment Gateway
 */

namespace eWAY\Payment;

use eWAY\Common\Helper;
use eWAY\Collection\CardCollection;
use eWAY\Collection\CustomerCollection;

/**
 * Class PaymentAbstract
 * @package XiNG\eWAY\Payment
 */
abstract class PaymentAbstract implements PaymentInterface
{
    /**
     * @var
     */
    protected $parameters = array();

    /**
     * Create a new eWAY method instance
     */
    public function __construct($parameters = array())
    {
        if (!empty($parameters)) {
            $this->initialize($parameters);
        }
    }

    /**
     * Initialize this gateway with default parameters
     *
     * @param  array $parameters
     * @return $this
     */
    public function initialize(array $parameters = array())
    {
        // set default parameters
        foreach ($this->getDefaultParameters() as $key => $value) {
            if (is_array($value)) {
                $this->setParameter($key, reset($value));
            } else {
                $this->setParameter($key, $value);
            }
        }

        // Set parameters.
        foreach ($parameters as $key => $value) {
            if (is_array($value)) {
                $this->setParameter($key, reset($value));
            } else {
                $this->setParameter($key, $value);
            }
        }

        Helper::initialize($this, $this->parameters);

        return $this;
    }

    /**
     * @return string
     */
    public function getMethod()
    {
        return Helper::getMethodName(get_class($this));
    }

    /**
     * @return mixed
     */
    public function getParameters()
    {
        return $this->parameters;
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

    /**
     * @return array
     */
    public function getDefaultParameters()
    {
        return array(
            'apiKey' => '',
            'apiSecret' => '',
            'apiTestMode' => false,
        );
    }

    /**
     * @return null
     */
    public function getApiKey()
    {
        return $this->getParameter('apiKey');
    }

    /**
     * @param $value
     * @return MethodAbstract
     */
    public function setApiKey($value)
    {
        return $this->setParameter('apiKey', $value);
    }

    /**
     * @return null
     */
    public function getApiSecret()
    {
        return $this->getParameter('apiSecret');
    }

    /**
     * @param $value
     * @return MethodAbstract
     */
    public function setApiSecret($value)
    {
        return $this->setParameter('apiSecret', $value);
    }

    /**
     * @return null
     */
    public function getApiTestMode()
    {
        return $this->getParameter('apiTestMode');
    }

    /**
     * @param $value
     * @return MethodAbstract
     */
    public function setApiTestMode($value)
    {
        return $this->setParameter('apiTestMode', $value);
    }

    /**
     * @return PaymentAbstract
     */
    public function getCustomer()
    {
        return $this->setParameter('Customer', $value);
    }

    /**
     * @param $customer
     * @return PaymentAbstract
     */
    public function setCustomer($customer)
    {
        $customer = new CustomerCollection($customer);

        $this->setParameter('Customer', $customer->getParameters());

        return $this;
    }
}
