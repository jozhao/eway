<?php

/**
 * eWAY Payment Gateway
 */

namespace eWAY\Collection;

/**
 * Class OptionsCollection
 * @package XiNG\eWAY\Collection
 *
 * This section is optional.
 * Anything appearing in this section is not displayed to the customer.
 * Up to 99 options can be defined. Each option has just one field
 *
 */
class OptionsCollection extends CollectionAbstract
{
    /**
     * @var array
     */
    protected $parameters = array();

    /**
     * Return default parameters.
     */
    function getDefaultParameters()
    {
        return array();
    }
}
