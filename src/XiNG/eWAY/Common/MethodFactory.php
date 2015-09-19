<?php

/**
 * eWAY Payment Gateway - Token Payment
 */

namespace XiNG\eWAY\Common;

use XiNG\eWAY\Exception\RuntimeException;

/**
 * Class MethodFactory
 * @package XiNG\eWAY\Method
 */
class MethodFactory implements MethodFactoryInterface
{
    /**
     * @param $class
     * @return mixed
     * @throws RuntimeException
     */
    public function create($class)
    {
        $class = Helper::getMethodClassName($class);
        if (!class_exists($class)) {
            throw new RuntimeException("Class '$class' not found");
        }

        return new $class();
    }
}
