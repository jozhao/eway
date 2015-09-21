<?php

/**
 * eWAY Payment Gateway
 */

namespace XiNG\eWAY\Message;

/**
 * Interface RequestInterface
 * @package XiNG\eWAY\Message
 */
interface RequestInterface
{
    /**
     * @param array $parameters
     * @return mixed
     */
    public function initialize(array $parameters = array());

    /**
     * @return mixed
     */
    public function send();
}
