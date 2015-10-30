<?php

/**
 * eWAY Payment Gateway
 */

namespace eWAY\Collection;

/**
 * Class CardCollection
 * @package XiNG\eWAY\Collection
 */
class CardCollection extends CollectionAbstract
{
    /**
     * @var array
     */
    protected $parameters = array();

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->getParameter('Name');
    }

    /**
     * @param $value
     * @return $this
     */
    public function setName($value)
    {
        $this->setParameter('Name', $value);

        return $this;
    }

    /**
     * @return mixed
     */
    public function getNumber()
    {
        return $this->getParameter('Number');
    }

    /**
     * @param $value
     * @return $this
     */
    public function setNumber($value)
    {
        $this->setParameter('Number', $value);

        return $this;
    }

    /**
     * @return mixed
     */
    public function getExpiryMonth()
    {
        return $this->getParameter('ExpiryMonth');
    }

    /**
     * @param $value
     * @return $this
     */
    public function setExpiryMonth($value)
    {
        $this->setParameter('ExpiryMonth', $value);

        return $this;
    }

    /**
     * @return mixed
     */
    public function getExpiryYear()
    {
        return $this->getParameter('ExpiryYear');
    }

    /**
     * @param $value
     * @return $this
     */
    public function setExpiryYear($value)
    {
        $this->setParameter('ExpiryYear', $value);

        return $this;
    }

    /**
     * @return mixed
     */
    public function getStartMonth()
    {
        return $this->getParameter('StartMonth');
    }

    /**
     * @param $value
     * @return $this
     */
    public function setStartMonth($value)
    {
        $this->setParameter('StartMonth', $value);

        return $this;
    }

    /**
     * @return mixed
     */
    public function getStartYear()
    {
        return $this->getParameter('StartYear');
    }

    /**
     * @param $value
     * @return $this
     */
    public function setStartYear($value)
    {
        $this->setParameter('StartYear', $value);

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIssueNumber()
    {
        return $this->getParameter('IssueNumber');
    }

    /**
     * @param $value
     * @return $this
     */
    public function setIssueNumber($value)
    {
        $this->setParameter('IssueNumber', $value);

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCVN()
    {
        return $this->getParameter('CVN');
    }

    /**
     * @param $value
     * @return $this
     */
    public function setCVN($value)
    {
        $this->setParameter('CVN', $value);

        return $this;
    }

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
