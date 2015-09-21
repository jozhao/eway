<?php

/**
 * eWAY Payment Gateway
 */

namespace XiNG\eWAY\Collection;

/**
 * Class CustomerCollection
 * @package XiNG\eWAY\Collection
 *
 * <code>
 * "Customer": {
 *   "Reference": "A12345",
 *   "Title": "Mr.",
 *   "FirstName": "John",
 *   "LastName": "Smith",
 *   "CompanyName": "Demo Shop 123",
 *   "JobDescription": "Developer",
 *   "Street1": "Level 5",
 *   "Street2": "369 Queen Street",
 *   "City": "Sydney",
 *   "State": "NSW",
 *   "PostalCode": "2000",
 *   "Country": "au",
 *   "Phone": "09 889 0986",
 *   "Mobile": "09 889 6542",
 *   "Email": "demo@example.org",
 *   "Url": "http://www.ewaypayments.com"
 * }
 * </code>
 */
class CustomerCollection extends CollectionAbstract
{
    public function getDefaultParameters()
    {
        return array(
          'Customer' => array(
            'TokenCustomerID' => '',
            'Reference' => '',
            'Title' => '',
            'FirstName' => '',
            'LastName' => '',
            'CompanyName' => '',
            'JobDescription' => '',
            'Street1' => '',
            'Street2' => '',
            'City' => '',
            'State' => '',
            'PostalCode' => '',
            'Country' => '',
            'Email' => '',
            'Phone' => '',
            'Mobile' => '',
            'Comments' => '',
            'Fax' => '',
            'Url' => '',
          ),
        );
    }
}
