<?php

/**
 * eWAY Payment Gateway
 */

namespace XiNG\eWAY\Message;

/**
 * Interface MessageFactoryInterface
 * @package XiNG\eWAY\Message
 */
interface MessageFactoryInterface
{
    /**
     * @return mixed
     */
    public function createResponse();

    /**
     * @return mixed
     */
    public function createRequest();
}
