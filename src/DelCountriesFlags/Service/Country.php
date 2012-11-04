<?php

namespace DelCountriesFlags\Service;

use Zend\ServiceManager\ServiceManagerAwareInterface;
use Zend\ServiceManager\ServiceManager;
use Zend\Stdlib\Hydrator\ClassMethods;
use ZfcBase\EventManager\EventProvider;
use DelCountriesFlags\Mapper\CountryInterface as CountryMapperInterface;

class Country extends EventProvider implements ServiceManagerAwareInterface
{

    /**
     * @var CountryMapperInterface
     */
    protected $countryMapper;

    /**
     * @var ServiceManager
     */
    protected $serviceManager;

    /**
     * getCountry
     * 
     * @param string $id
     * @throws Exception
     */
    public function getCountry($id)
    {
    	return $this->getCountryMapper()->findByID($id);
    }

    /**
     * getCountryMapper
     *
     * @return CountryMapperInterface
     */
    public function getCountryMapper()
    {
        if (null === $this->countryMapper) {
            $this->countryMapper = $this->getServiceManager()->get('delcountriesflags_mapper');
        }
        return $this->countryMapper;
    }

    /**
     * setCountryMapper
     *
     * @param CountryMapperInterface $countryMapper
     * @return Country
     */
    public function setCountryMapper(CountryMapperInterface $countryMapper)
    {
        $this->countryMapper = $countryMapper;
        return $this;
    }

 	 /**
     * Retrieve service manager instance
     *
     * @return ServiceManager
     */
    public function getServiceManager()
    {
        return $this->serviceManager;
    }

    /**
     * Set service manager instance
     *
     * @param ServiceManager $locator
     * @return User
     */
    public function setServiceManager(ServiceManager $serviceManager)
    {
        $this->serviceManager = $serviceManager;
        return $this;
    }
}
