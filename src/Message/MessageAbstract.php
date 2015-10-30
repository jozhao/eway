<?php

/**
 * eWAY Payment Gateway
 */

namespace eWAY\Message;

/**
 * Class MessageAbstract
 * @package XiNG\eWAY\Message
 */
abstract class MessageAbstract implements MessageInterface
{
    /**
     * @var
     */
    private $body;
    /**
     * @var array
     */
    private $headers = array();

    /**
     * @return mixed
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @param mixed $body
     */
    public function setBody($body)
    {
        $this->body = $body;
    }

    /**
     * @return array
     */
    public function getHeaders()
    {
        return $this->headers;
    }

    /**
     * @param array $headers
     */
    public function setHeaders($headers = array())
    {
        $this->headers = $headers;
    }

    /**
     * @param $header
     * @return array
     */
    public function getHeader($header)
    {
        $name = strtolower($header);
        if (!isset($this->headers[$name])) {
            return array();
        }

        return $this->headers[$name];
    }

    /**
     * @param $header
     * @param $value
     * @return $this
     */
    public function setHeader($header, $value)
    {
        $header = trim($header);
        $name = strtolower($header);

        switch (gettype($value)) {
            case 'string':
                $this->headers[$name] = array(trim($value));
                break;
            case 'integer':
            case 'double':
                $this->headers[$name] = array((string) $value);
                break;
            case 'array':
                foreach ($value as &$v) {
                    $v = trim($v);
                }
                $this->headers[$name] = $value;
                break;
            default:
                throw new \InvalidArgumentException(
                  'Invalid header value '
                  .'provided: '.var_export($value, true)
                );
        }

        return $this;
    }
}
