<?php

namespace DelCountriesFlags\Options;

interface CountryServiceOptionsInterface 
{
    /**
     * set country entity class name
     *
     * @param string $countryEntityClass
     * @return ModuleOptions
     */
    public function setCountryEntityClass($userEntityClass);

    /**
     * get user entity class name
     *
     * @return string
     */
    public function getCountryEntityClass();
}
