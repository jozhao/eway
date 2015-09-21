<?php

/**
 * eWAY Payment Gateway
 */

namespace XiNG\eWAY\Collection;

/**
 * Class CollectionFactory
 * @package XiNG\eWAY\Collection
 */
class CollectionFactory
{
    /**
     * @param $class
     * @param array $parameters
     * @return mixed
     */
    static public function create($class, $parameters = array())
    {
        return new $class($parameters);
    }
}
