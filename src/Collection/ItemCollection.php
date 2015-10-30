<?php

/**
 * eWAY Payment Gateway
 */

namespace eWAY\Collection;

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
class ItemCollection extends CollectionAbstract
{
    /**
     * @var array
     */
    protected $parameters = array();

    /**
     * @return mixed
     */
    public function getSKU()
    {
        return $this->getParameter('SKU');
    }

    /**
     * @param $value
     * @return $this
     */
    public function setSKU($value)
    {
        $this->setParameter('SKU', $value);

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->getParameter('Description');
    }

    /**
     * @param $value
     * @return $this
     */
    public function setDescription($value)
    {
        $this->setParameter('Description', $value);

        return $this;
    }

    /**
     * @return mixed
     */
    public function getQuantity()
    {
        return $this->getParameter('Quantity');
    }

    /**
     * @param $value
     * @return $this
     */
    public function setQuantity($value)
    {
        $this->setParameter('Quantity', $value);

        return $this;
    }

    /**
     * @return mixed
     */
    public function getUnitCost()
    {
        return $this->getParameter('UnitCost');
    }

    /**
     * @param $value
     * @return $this
     */
    public function setUnitCost($value)
    {
        $this->setParameter('UnitCost', $value);

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTax()
    {
        return $this->getParameter('Tax');
    }

    /**
     * @param $value
     * @return $this
     */
    public function setTax($value)
    {
        $this->setParameter('Tax', $value);

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTotal()
    {
        return $this->getParameter('Total');
    }

    /**
     * @param $value
     * @return $this
     */
    public function setTotal($value)
    {
        $this->setParameter('Total', $value);

        return $this;
    }

    /**
     * Return default parameters.
     */
    function getDefaultParameters()
    {
        return array(
          'SKU' => '',
          'Description' => '',
          'Quantity' => '',
          'UnitCost' => '',
          'Tax' => '',
          'Total' => '',
        );
    }
}
