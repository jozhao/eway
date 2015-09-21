<?php

/**
 * eWAY Payment Gateway
 */

namespace XiNG\eWAY\Message;

use XiNG\eWAY\Collection\Collection;
use XiNG\eWAY\Common\Helper;
use XiNG\eWAY\Exception\RuntimeException;

/**
 * Class Request
 * @package XiNG\eWAY\Message
 */
abstract class Request implements RequestInterface
{
    /**
     * An associated ResponseInterface.
     *
     * @var ResponseInterface
     */
    protected $response;

    /**
     * @var
     */
    private $request;

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
        if (null !== $this->response) {
            throw new RuntimeException(
                'Request cannot be modified after it has been sent!'
            );
        }

        $this->request = new Collection($parameters);

        return $this;
    }

    /**
     * @return mixed
     */
    public function send()
    {
        $data = $this->getData();

        return $this->sendData($data);
    }

    /**
     * @param $data
     */
    public function sendData($data)
    {
        $data = $this->getData();
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param mixed $data
     */
    public function setData($data)
    {
        $this->data = $data;
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
}
