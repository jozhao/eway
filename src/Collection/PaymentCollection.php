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
