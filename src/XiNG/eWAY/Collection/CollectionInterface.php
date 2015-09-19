<?php

/**
 * eWAY Payment Gateway
 */

namespace XiNG\eWAY\Collection;

/**
 * Interface CollectionInterface
 * @package XiNG\eWAY\Collection
 */
interface CollectionInterface
{
    /**
     * @return mixed
     */
    public function getLabel();

    /**
     * @return mixed
     */
    public function getDescription();

    /**
     * @return mixed
     */
    public function getQuantity();

    /**
     * @return mixed
     */
    public function getPrice();

    /**
     * @return mixed
     */
    public function getCurrencyCode();
}
