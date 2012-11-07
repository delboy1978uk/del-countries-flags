<?php

namespace DelCountriesFlags\Options;

use Zend\Stdlib\AbstractOptions;

class ModuleOptions extends AbstractOptions implements CountryServiceOptionsInterface
{

    /**
     * @var string
     */
    protected $countryEntityClass = 'DelCountriesFlags\Entity\Country';
    
    /** @var string */
    protected $countryNameViewTemplate = 'del-countries-flags/country.phtml';

    /** @var string */
    protected $countryFlagViewTemplate = 'del-countries-flags/flag.phtml';
    
    
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
    
	/**
     * set the view template for the country
     *
     * @param string $countryNameViewTemplate
     * @return ModuleOptions
     */
    public function setCountryNameViewTemplate($countrynameViewTemplate)
    {
        $this->countryNameViewTemplate = $countrynameViewTemplate;
        return $this;
    }

    /**
     * get the view template for the image
     *
     * @return string
     */
    public function getCountryNameViewTemplate()
    {
        return $this->countryNameViewTemplate;
    }
    
	/**
     * set the view template for the country
     *
     * @param string $countryFlagViewTemplate
     * @return ModuleOptions
     */
    public function setCountryFlagViewTemplate($countryFlagViewTemplate)
    {
        $this->countryFlagViewTemplate = $countryFlagViewTemplate;
        return $this;
    }

    /**
     * get the view template for the image
     *
     * @return string
     */
    public function getCountryFlagViewTemplate()
    {
        return $this->countryFlagViewTemplate;
    }

    
}