<?php

namespace DelCountriesFlags\Entity;

interface CountryInterface
{
    /**
     * Get country's id.
     *
     * @return string
     */
    public function getCountryid();

    /**
     * Get country's name.
     *
     * @return string
     */
    public function getCountry();
    
    /**
     * Get country's name.
     *
     * @return string
     */
    public function getName();

    /**
     * Get country's ISO code
     *
     * @return string
     */
    public function getIso();

    /**
     * Get country's numerical code
     *
     * @return int
     */
    public function getNumcode();

    /**
     * Get country's flag file name
     *
     * @return string
     */
    public function getFlag();
    
    /**
     * Set countryid
     *
     * @param string $id
     * @return CountryInterface
     */
    public function setCountryid($id);
    
    /**
     * Set country caps name
     *
     * @param string $name
     * @return CountryInterface
     */
    public function setName($name);
    
    /**
     * Set country name
     *
     * @param string $country
     * @return CountryInterface
     */
    public function setCountry($country);
    
    /**
     * Set ISO code
     *
     * @param string $iso
     * @return CountryInterface
     */
    public function setIso($iso);
    
    /**
     * Set numcode
     *
     * @param string $numcode
     * @return CountryInterface
     */
    public function setNumcode($numcode);
}
