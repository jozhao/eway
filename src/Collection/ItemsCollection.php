<?php

/**
 * eWAY Payment Gateway
 */

namespace XiNG\eWAY\Collection;

/**
 * Class ItemsCollection
 * @package XiNG\eWAY\Collection
 *
 * The Items section is optional.
 * If provided, it should contain a list of line items purchased by the customer
 * Up to a maximum of 99 items.
 * It is used by Beagle Fraud Alerts (Enterprise) to calculate a risk score for this transaction.
 *
 * <code>
 * "Items": [
 * {
 *   "SKU": "12345678901234567890",
 *   "Description": "Item Description 1",
 *   "Quantity": 1,
 *   "UnitCost": 400,
 *   "Tax": 100,
 *   "Total": 500
 * },
 * {
 *   "SKU": "123456789012",
 *   "Description": "Item Description 2",
 *   "Quantity": 1,
 *   "UnitCost": 400,
 *   "Tax": 100,
 *   "Total": 500
 * }
 * ]
 * </code>
 *
 */
class ItemsCollection extends CollectionAbstract
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
          'Items' => array(),
        );
    }
}
