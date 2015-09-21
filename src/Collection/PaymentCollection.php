<?php

/**
 * eWAY Payment Gateway
 */

namespace XiNG\eWAY\Collection;

/**
 * Class PaymentCollection
 * @package XiNG\eWAY\Collection
 */
class PaymentCollection extends CollectionAbstract
{
    /**
     * @var array
     */
    protected $parameters = array();

    /**
     * @return mixed
     */
    public function getTotalAmount()
    {
        return $this->getParameter('TotalAmount');
    }

    /**
     * @param $value
     * @return $this
     */
    public function setTotalAmount($value)
    {
        $this->setParameter('TotalAmount', $value);

        return $this;
    }

    /**
     * @return mixed
     */
    public function getInvoiceNumber()
    {
        return $this->getParameter('InvoiceNumber');
    }

    /**
     * @param $value
     * @return $this
     */
    public function setInvoiceNumber($value)
    {
        $this->setParameter('InvoiceNumber', $value);

        return $this;
    }

    /**
     * @return mixed
     */
    public function getInvoiceDescription()
    {
        return $this->getParameter('InvoiceDescription');
    }

    /**
     * @param $value
     * @return $this
     */
    public function setInvoiceDescription($value)
    {
        $this->setParameter('InvoiceDescription', $value);

        return $this;
    }

    /**
     * @return mixed
     */
    public function getInvoiceReference()
    {
        return $this->getParameter('InvoiceReference');
    }

    /**
     * @param $value
     * @return $this
     */
    public function setInvoiceReference($value)
    {
        $this->setParameter('InvoiceReference', $value);

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCurrencyCode()
    {
        return $this->getParameter('CurrencyCode');
    }

    /**
     * @param $value
     * @return $this
     */
    public function setCurrencyCode($value)
    {
        $this->setParameter('CurrencyCode', $value);

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTransactionID()
    {
        return $this->getParameter('TransactionID');
    }

    /**
     * @param $value
     * @return $this
     */
    public function setTransactionID($value)
    {
        $this->setParameter('TransactionID', $value);

        return $this;
    }

    /**
     * Return default parameters.
     */
    function getDefaultParameters()
    {
        return array(
          'Payment' => array(
            'TotalAmount' => '',
            'InvoiceNumber' => '',
            'InvoiceDescription' => '',
            'InvoiceReference' => '',
            'CurrencyCode' => '',
            'TransactionID' => '', // Refund
          ),
        );
    }
}
