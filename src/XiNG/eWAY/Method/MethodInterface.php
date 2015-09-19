<?php

/**
 * eWAY Payment Gateway - Token Payment
 */

namespace XiNG\eWAY\Method;

/**
 * Interface MethodInterface
 * @package XiNG\eWAY\Common
 */
interface MethodInterface
{
    /**
     * @param array $parameters
     * @return mixed
     */
    public function initialize(array $parameters = array());

    /**
     * @return mixed
     */
    public function getMethod();

    /**
     * @return mixed
     */
    public function getMethodName();

    /**
     * @return mixed
     */
    public function getParameters();

    /**
     * @return mixed
     */
    public function getDefaultParameters();
}
