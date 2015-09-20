<?php

/**
 * @file
 * eWAY Rapid API 3.1
 * Requires PHP 5.3 or greater with the cURL extension
 * @see https://eway.io/api-v3/
 * @version 1.0
 * @package eWAY
 * @author XiNG
 * @copyright (c) 2015, XiNG Digital
 */

namespace XiNG\eWAY;

use XiNG\eWAY\Payment\PaymentFactory as PaymentFactory;

/**
 * Class eWAY
 * @package XiNG\eWAY
 */
class eWAY
{
    /**
     * @var
     */
    private static $factory;

    /**
     * @return mixed
     */
    public static function getFactory()
    {
        if (is_null(static::$factory)) {
            static::$factory = new PaymentFactory;
        }

        return static::$factory;
    }

    /**
     * @param GatewayFactory|null $factory
     */
    public static function setFactory(PaymentFactory $factory = null)
    {
        static::$factory = $factory;
    }

    /**
     * @param $method
     * @param $parameters
     * @return mixed
     */
    public static function __callStatic($method, $parameters)
    {
        $factory = static::getFactory();

        return call_user_func_array(array($factory, $method), $parameters);
    }
}
