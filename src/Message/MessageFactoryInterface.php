<?php

/**
 * eWAY Payment Gateway
 */

namespace eWAY\Message;

/**
 * Interface MessageFactoryInterface
 * @package XiNG\eWAY\Message
 */
interface MessageFactoryInterface
{
    /**
     * @return mixed
     */
    static public function createResponse();

    /**
     * @return mixed
     */
    static public function createRequest($class, $parameters = array());
}
