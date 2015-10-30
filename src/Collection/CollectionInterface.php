<?php

/**
 * eWAY Payment Gateway
 */

namespace eWAY\Collection;

/**
 * Interface CollectionInterface
 * @package XiNG\eWAY\Collection
 */
interface CollectionInterface
{
    /**
     * @param array $parameters
     * @return mixed
     */
    public function initialize(array $parameters = array());

    /**
     * @return mixed
     */
    public function getParameters();

    /**
     * @return mixed
     */
    public function getDefaultParameters();
}
