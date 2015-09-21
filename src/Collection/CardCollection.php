<?php

/**
 * eWAY Payment Gateway
 */

namespace XiNG\eWAY\Collection;

/**
 * Class CardCollection
 * @package XiNG\eWAY\Collection
 */
class CardCollection extends CollectionAbstract
{
    /**
     * Return default parameters.
     */
    function getDefaultParameters()
    {
        return array(
          'Customer' => array(
            'CardDetails' => array(
              'Name' => '',
              'Number' => '',
              'ExpiryMonth' => '',
              'ExpiryYear' => '',
              'StartMonth' => '',
              'StartYear' => '',
              'IssueNumber' => '',
              'CVN' => '',
            ),
          ),
        );
    }
}
