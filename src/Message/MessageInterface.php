<?php

/**
 * eWAY Payment Gateway
 */

namespace XiNG\eWAY\Message;

/**
 * Interface MessageInterface
 * @package XiNG\eWAY\Message
 */
interface MessageInterface
{
    /**
     * @param null $body
     * @return mixed
     */
    public function setBody($body);

    /**
     * @return mixed
     */
    public function getBody();

    /**
     * @param array $headers
     * @return mixed
     */
    public function setHeaders($headers = array());

    /**
     * @return mixed
     */
    public function getHeaders();

    /**
     * @param $header
     * @return mixed
     */
    public function getHeader($header);

    /**
     * @param $header
     * @param $value
     * @return mixed
     */
    public function setHeader($header, $value);
}
