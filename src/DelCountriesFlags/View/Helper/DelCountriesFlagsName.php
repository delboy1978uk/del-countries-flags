<?php

namespace DelCountriesFlags\View\Helper;

use DelCountriesFlags\Entity\Country;

use Zend\View\Helper\AbstractHelper;
use DelCountriesFlags\Entity\CountryInterface as Country;

class DelCountriesFlagsName extends AbstractHelper
{
    /**
     * __invoke
     *
     * @access public
     * @return String
     */
    public function __invoke($country = null)
    {
        if (null === $country) { return false; }
        if (!$country instanceof Country) 
        {
            throw new \DelCountriesMaps\Exception\DomainException( '$country is not an instance of Country', 500);
        }

        $countryName = $country->getCountry();
		return $countryName;
    }
}
