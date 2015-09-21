<?php

/**
 * eWAY Payment Gateway
 */

namespace XiNG\eWAY\Collection;

/**
 * Class ShippingAddressCollection
 * @package XiNG\eWAY\Collection
 *
 * The ShippingAddress section is optional.
 * It is used by Beagle Fraud Alerts (Enterprise) to calculate a risk score for this transaction.
 */
class ShippingAddressCollection extends CollectionAbstract
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
        return array(
          'ShippingAddress' => array(
            'ShippingMethod' => '',
            'FirstName' => '',
            'LastName' => '',
            'Street1' => '',
            'Street2' => '',
            'City' => '',
            'State' => '',
            'Country' => '',
            'PostalCode' => '',
            'Email' => '',
            'Phone' => '',
            'Fax' => '',
          ),
        );
    }
}
