<?php

namespace DelCountriesFlags\Entity;

interface CountryInterface
{
    /**
     * Get country's id.
     *
     * @return string
     */
    public function getCountryId();

    /**
     * Get country's name.
     *
     * @return string
     */
    public function getCountryName();
    
    /**
     * Get country's name.
     *
     * @return string
     */
    public function getCountryNameCaps();

    /**
     * Get country's ISO code
     *
     * @return string
     */
    public function getCountryISO();

    /**
     * Get country's numerical code
     *
     * @return int
     */
    public function getNumCode();

    /**
     * Get country's flag file name
     *
     * @return string
     */
    public function getFlag($email);
}
