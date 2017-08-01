<?php

namespace Etrias\PaazlConnector\SoapTypes;

class ShippingAddress
{

    /**
     * @var string
     */
    protected $accountNumber = null;

    /**
     * @var customerName
     */
    protected $customerName = null;

    /**
     * @var companyName
     */
    protected $companyName = null;

    /**
     * @var nameOther
     */
    protected $nameOther = null;

    /**
     * @var string
     */
    protected $street = null;

    /**
     * @var string
     */
    protected $housenumber = null;

    /**
     * @var string
     */
    protected $addition = null;

    /**
     * @var string
     */
    protected $additionalAddressLine = null;

    /**
     * @var string
     */
    protected $zipcode = null;

    /**
     * @var string
     */
    protected $city = null;

    /**
     * @var string
     */
    protected $province = null;

    /**
     * @var string
     */
    protected $country = null;

    /**
     * @var bool
     */
    protected $localAddressValidation = null;

    /**
     * @var string
     */
    protected $additionalInstruction = null;

    /**
     * Constructor
     *
     * @var string $accountNumber
     * @var customerName $customerName
     * @var companyName $companyName
     * @var nameOther $nameOther
     * @var string $street
     * @var string $housenumber
     * @var string $addition
     * @var string $additionalAddressLine
     * @var string $zipcode
     * @var string $city
     * @var string $province
     * @var string $country
     * @var bool $localAddressValidation
     * @var string $additionalInstruction
     */
    public function __construct(
        $accountNumber = null,
        $customerName,
        $companyName = null,
        $nameOther = null,
        $street,
        $housenumber,
        $addition = null,
        $additionalAddressLine = null,
        $zipcode,
        $city,
        $province = null,
        $country = null,
        $localAddressValidation = null,
        $additionalInstruction = null
    )
    {
        $this->accountNumber = $accountNumber;
        $this->customerName = $customerName;
        $this->companyName = $companyName;
        $this->nameOther = $nameOther;
        $this->street = $street;
        $this->housenumber = $housenumber;
        $this->addition = $addition;
        $this->additionalAddressLine = $additionalAddressLine;
        $this->zipcode = $zipcode;
        $this->city = $city;
        $this->province = $province;
        $this->country = $country;
        $this->localAddressValidation = $localAddressValidation;
        $this->additionalInstruction = $additionalInstruction;
    }

    /**
     * @return string
     */
    public function getAccountNumber()
    {
        return $this->accountNumber;
    }

    /**
     * @param string $accountNumber
     * @return $this
     */
    public function setAccountNumber($accountNumber)
    {
        $this->accountNumber = $accountNumber;
        return $this;
    }

    /**
     * @return customerName
     */
    public function getCustomerName()
    {
        return $this->customerName;
    }

    /**
     * @param customerName $customerName
     * @return $this
     */
    public function setCustomerName($customerName)
    {
        $this->customerName = $customerName;
        return $this;
    }

    /**
     * @return companyName
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * @param companyName $companyName
     * @return $this
     */
    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;
        return $this;
    }

    /**
     * @return nameOther
     */
    public function getNameOther()
    {
        return $this->nameOther;
    }

    /**
     * @param nameOther $nameOther
     * @return $this
     */
    public function setNameOther($nameOther)
    {
        $this->nameOther = $nameOther;
        return $this;
    }

    /**
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * @param string $street
     * @return $this
     */
    public function setStreet($street)
    {
        $this->street = $street;
        return $this;
    }

    /**
     * @return string
     */
    public function getHousenumber()
    {
        return $this->housenumber;
    }

    /**
     * @param string $housenumber
     * @return $this
     */
    public function setHousenumber($housenumber)
    {
        $this->housenumber = $housenumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getAddition()
    {
        return $this->addition;
    }

    /**
     * @param string $addition
     * @return $this
     */
    public function setAddition($addition)
    {
        $this->addition = $addition;
        return $this;
    }

    /**
     * @return string
     */
    public function getAdditionalAddressLine()
    {
        return $this->additionalAddressLine;
    }

    /**
     * @param string $additionalAddressLine
     * @return $this
     */
    public function setAdditionalAddressLine($additionalAddressLine)
    {
        $this->additionalAddressLine = $additionalAddressLine;
        return $this;
    }

    /**
     * @return string
     */
    public function getZipcode()
    {
        return $this->zipcode;
    }

    /**
     * @param string $zipcode
     * @return $this
     */
    public function setZipcode($zipcode)
    {
        $this->zipcode = $zipcode;
        return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $city
     * @return $this
     */
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return string
     */
    public function getProvince()
    {
        return $this->province;
    }

    /**
     * @param string $province
     * @return $this
     */
    public function setProvince($province)
    {
        $this->province = $province;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $country
     * @return $this
     */
    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * @return bool
     */
    public function getLocalAddressValidation()
    {
        return $this->localAddressValidation;
    }

    /**
     * @param bool $localAddressValidation
     * @return $this
     */
    public function setLocalAddressValidation($localAddressValidation)
    {
        $this->localAddressValidation = $localAddressValidation;
        return $this;
    }

    /**
     * @return string
     */
    public function getAdditionalInstruction()
    {
        return $this->additionalInstruction;
    }

    /**
     * @param string $additionalInstruction
     * @return $this
     */
    public function setAdditionalInstruction($additionalInstruction)
    {
        $this->additionalInstruction = $additionalInstruction;
        return $this;
    }


}

