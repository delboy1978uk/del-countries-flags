<?php

namespace DelCountriesFlags\Options;

use Zend\Stdlib\AbstractOptions;

class ModuleOptions extends AbstractOptions implements CountryServiceOptionsInterface
{

    /**
     * @var string
     */
    protected $countryEntityClass = 'DelCountriesFlags\Entity\Country';

    /**
     * set country entity class name
     *
     * @param string $countryEntityClass
     * @return ModuleOptions
     */
    public function setCountryEntityClass($countryEntityClass)
    {
        $this->countryEntityClass = $countryEntityClass;
        return $this;
    }

    /**
     * get country entity class name
     *
     * @return string
     */
    public function getCountryEntityClass()
    {
        return $this->countryEntityClass;
    }

    
}
