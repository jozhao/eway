<?php

/**
 * eWAY Payment Gateway
 */

namespace XiNG\eWAY\Message;

/**
 * Class MessageFactory
 * @package XiNG\eWAY\Message
 */
class MessageFactory implements MessageFactoryInterface
{
    /**
     * @return Response
     */
    static public function createResponse()
    {
        return new Response();
    }

    /**
     * @return Request
     */
    static public function createRequest($class, $parameters = array())
    {
        return new $class($parameters);
    }
}
