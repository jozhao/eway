<?php

/**
 * eWAY Payment Gateway
 */

namespace eWAY\Collection;

/**
 * Class Collection
 * @package XiNG\eWAY\Collection
 *
 * @see https://eway.io/api-v3/#responsive-shared-page
 * @see https://eway.io/api-v3/#iframe
 *
 */
class Collection extends CollectionAbstract
{
    /**
     * @var array
     */
    protected $parameters = array();

    /**
     * @return mixed
     */
    public function getCustomer()
    {
        return $this->getParameter('Customer');
    }

    /**
     * @param $value
     */
    public function setCustomer($value)
    {
        $this->setParameter('Customer', $value);
    }

    /**
     * @return mixed
     */
    public function getShippingAddress()
    {
        return $this->getParameter('ShippingAddress');
    }

    /**
     * @param $value
     */
    public function setShippingAddress($value)
    {
        $this->setParameter('ShippingAddress', $value);
    }

    /**
     * @return mixed
     */
    public function getItems()
    {
        return $this->getParameter('Items');
    }

    /**
     * @param $value
     */
    public function setItems($value)
    {
        $this->setParameter('Items', $value);
    }

    /**
     * @return mixed
     */
    public function getOptions()
    {
        return $this->getParameter('Options');
    }

    /**
     * @param $value
     */
    public function setOptions($value)
    {
        $this->setParameter('Options', $value);
    }

    /**
     * @return mixed
     */
    public function getPayment()
    {
        return $this->getParameter('Payment');
    }

    /**
     * @param $value
     */
    public function setPayment($value)
    {
        $this->setParameter('Payment', $value);
    }

    /**
     * @return mixed
     */
    public function getRedirectUrl()
    {
        return $this->getParameter('RedirectUrl');
    }

    /**
     * @param $value
     */
    public function setRedirectUrl($value)
    {
        $this->setParameter('RedirectUrl', $value);
    }

    /**
     * @return mixed
     */
    public function getCancelUrl()
    {
        return $this->getParameter('CancelUrl');
    }

    /**
     * @param $value
     */
    public function setCancelUrl($value)
    {
        $this->setParameter('CancelUrl', $value);
    }

    /**
     * @return mixed
     */
    public function getMethod()
    {
        return $this->getParameter('Method');
    }

    /**
     * @param $value
     */
    public function setMethod($value)
    {
        $this->setParameter('Method', $value);
    }

    /**
     * @return mixed
     */
    public function getDeviceID()
    {
        return $this->getParameter('DeviceID');
    }

    /**
     * @param $value
     */
    public function setDeviceID($value)
    {
        $this->setParameter('DeviceID', $value);
    }

    /**
     * @return mixed
     */
    public function getCustomerIP()
    {
        return $this->getParameter('CustomerIP');
    }

    /**
     * @param $value
     */
    public function setCustomerIP($value)
    {
        $this->setParameter('CustomerIP', $value);
    }

    /**
     * @return mixed
     */
    public function getPartnerID()
    {
        return $this->getParameter('PartnerID');
    }

    /**
     * @param $value
     */
    public function setPartnerID($value)
    {
        $this->setParameter('PartnerID', $value);
    }

    /**
     * @return mixed
     */
    public function getTransactionType()
    {
        return $this->getParameter('TransactionType');
    }

    /**
     * @param $value
     */
    public function setTransactionType($value)
    {
        $this->setParameter('TransactionType', $value);
    }

    /**
     * @return mixed
     */
    public function getLogoUrl()
    {
        return $this->getParameter('LogoUrl');
    }

    /**
     * @param $value
     */
    public function setLogoUrl($value)
    {
        $this->setParameter('LogoUrl', $value);
    }

    /**
     * @return mixed
     */
    public function getHeaderText()
    {
        return $this->getParameter('HeaderText');
    }

    /**
     * @param $value
     */
    public function setHeaderText($value)
    {
        $this->setParameter('HeaderText', $value);
    }

    /**
     * @return mixed
     */
    public function getLanguage()
    {
        return $this->getParameter('Language');
    }

    /**
     * @param $value
     */
    public function setLanguage($value)
    {
        $this->setParameter('Language', $value);
    }

    /**
     * @return mixed
     */
    public function getCustomerReadOnly()
    {
        return $this->getParameter('CustomerReadOnly');
    }

    /**
     * @param $value
     */
    public function setCustomerReadOnly($value)
    {
        $this->setParameter('CustomerReadOnly', $value);
    }

    /**
     * @return mixed
     */
    public function getCustomView()
    {
        return $this->getParameter('CustomView');
    }

    /**
     * @param $value
     */
    public function setCustomView($value)
    {
        $this->setParameter('CustomView', $value);
    }

    /**
     * @return mixed
     */
    public function getVerifyCustomerPhone()
    {
        return $this->getParameter('VerifyCustomerPhone');
    }

    /**
     * @param $value
     */
    public function setVerifyCustomerPhone($value)
    {
        $this->setParameter('VerifyCustomerPhone', $value);
    }

    /**
     * @return mixed
     */
    public function getVerifyCustomerEmail()
    {
        return $this->getParameter('VerifyCustomerEmail');
    }

    /**
     * @param $value
     */
    public function setVerifyCustomerEmail($value)
    {
        $this->setParameter('VerifyCustomerEmail', $value);
    }

    /**
     * Return default parameters.
     */
    function getDefaultParameters()
    {
        return array(
          'Customer' => array(),
          'ShippingAddress' => array(),
          'Items' => array(),
          'Options' => array(),
          'Payment' => array(),
          'RedirectUrl' => '',
          'CancelUrl' => '',
          'Method' => '',
          'DeviceID' => '',
          'CustomerIP' => $_SERVER['REMOTE_ADDR'],
          'PartnerID' => '',
          'TransactionType' => '',
          'LogoUrl' => '',
          'HeaderText' => '',
          'Language' => '',
          'CustomerReadOnly' => '',
          'CustomView' => '',
            // Set whether the customer’s phone number should be confirmed using Beagle Verify.
          'VerifyCustomerPhone' => '',
            // Set whether the customer’s email should be confirmed using Beagle Verify.
          'VerifyCustomerEmail' => '',
        );
    }
}
