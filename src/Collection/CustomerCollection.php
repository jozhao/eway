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
    /**
     * @var array
     */
    protected $parameters = array();

    /**
     * @return mixed
     */
    public function getTokenCustomerID()
    {
        return $this->getParameter('TokenCustomerID');
    }

    /**
     * @param $value
     * @return $this
     */
    public function setTokenCustomerID($value)
    {
        $this->setParameter('TokenCustomerID', $value);

        return $this;
    }

    /**
     * @return mixed
     */
    public function getReference()
    {
        return $this->getParameter('Reference');
    }

    /**
     * @param $value
     * @return $this
     */
    public function setReference($value)
    {
        $this->setParameter('Reference', $value);

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->getParameter('Title');
    }

    /**
     * @param $value
     * @return $this
     */
    public function setTitle($value)
    {
        $this->setParameter('Title', $value);

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->getParameter('FirstName');
    }

    /**
     * @param $value
     * @return $this
     */
    public function setFirstName($value)
    {
        $this->setParameter('FirstName', $value);

        return $this;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->getParameter('LastName');
    }

    /**
     * @param $value
     * @return $this
     */
    public function setLastName($value)
    {
        $this->setParameter('LastName', $value);

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCompanyName()
    {
        return $this->getParameter('CompanyName');
    }

    /**
     * @param $value
     * @return $this
     */
    public function setCompanyName($value)
    {
        $this->setParameter('CompanyName', $value);

        return $this;
    }

    /**
     * @return mixed
     */
    public function getJobDescription()
    {
        return $this->getParameter('JobDescription');
    }

    /**
     * @param $value
     * @return $this
     */
    public function setJobDescription($value)
    {
        $this->setParameter('JobDescription', $value);

        return $this;
    }

    /**
     * @return mixed
     */
    public function getStreet1()
    {
        return $this->getParameter('Street1');
    }

    /**
     * @param $value
     * @return $this
     */
    public function setStreet1($value)
    {
        $this->setParameter('Street1', $value);

        return $this;
    }

    /**
     * @return mixed
     */
    public function getStreet2()
    {
        return $this->getParameter('Street2');
    }

    /**
     * @param $value
     * @return $this
     */
    public function setStreet2($value)
    {
        $this->setParameter('Street2', $value);

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->getParameter('City');
    }

    /**
     * @param $value
     * @return $this
     */
    public function setCity($value)
    {
        $this->setParameter('City', $value);

        return $this;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->getParameter('State');
    }

    /**
     * @param $value
     * @return $this
     */
    public function setState($value)
    {
        $this->setParameter('State', $value);

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPostalCode()
    {
        return $this->getParameter('PostalCode');
    }

    /**
     * @param $value
     * @return $this
     */
    public function setPostalCode($value)
    {
        $this->setParameter('PostalCode', $value);

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->getParameter('Country');
    }

    /**
     * @param $value
     * @return $this
     */
    public function setCountry($value)
    {
        $this->setParameter('Country', $value);

        return $this;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->getParameter('Email');
    }

    /**
     * @param $value
     * @return $this
     */
    public function setEmail($value)
    {
        $this->setParameter('Email', $value);

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->getParameter('Phone');
    }

    /**
     * @param $value
     * @return $this
     */
    public function setPhone($value)
    {
        $this->setParameter('Phone', $value);

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMobile()
    {
        return $this->getParameter('Mobile');
    }

    /**
     * @param $value
     * @return $this
     */
    public function setMobile($value)
    {
        $this->setParameter('Mobile', $value);

        return $this;
    }

    /**
     * @return mixed
     */
    public function getComments()
    {
        return $this->getParameter('Comments');
    }

    /**
     * @param $value
     * @return $this
     */
    public function setComments($value)
    {
        $this->setParameter('Comments', $value);

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFax()
    {
        return $this->getParameter('Fax');
    }

    /**
     * @param $value
     * @return $this
     */
    public function setFax($value)
    {
        $this->setParameter('Fax', $value);

        return $this;
    }

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->getParameter('Url');
    }

    /**
     * @param $value
     * @return $this
     */
    public function setUrl($value)
    {
        $this->setParameter('Url', $value);

        return $this;
    }

    /**
     * @return array
     */
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
