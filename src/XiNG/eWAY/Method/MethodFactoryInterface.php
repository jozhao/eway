<?php

/**
 * eWAY Payment Gateway - Token Payment
 */

namespace XiNG\eWAY\Method;

/**
 * Class MethodFactory
 * @package XiNG\eWAY\Method
 */
interface MethodFactoryInterface
{
    public function create($class);
}
