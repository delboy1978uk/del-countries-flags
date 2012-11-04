<?php

namespace DelCountriesFlags\Mapper;

use ZfcBase\Mapper\AbstractDbMapper;
use DelCountriesFlags\Entity\CountryInterface as CountryEntityInterface;

class Country extends AbstractDbMapper implements CountryInterface
{
    protected $tableName  = 'countries';

    public function getCountryById($countryid)
    {
    	return $this->getBy('countryid',$countryid);
    }
    
	public function getCountryByName($country)
    {
        return $this->getBy('country',$country);
    }
    
    public function getCountryByCapsName($name)
    {
        return $this->getBy('name',$name);
    }
    
	public function getCountryByISO($iso)
	{
        return $this->getBy('iso',$iso);
    }
	public function getCountryByNumCode($numcode)
    {
        return $this->getBy('numcode',$numcode);
    }
	
	private function getBy($whatever, $value)
	{
		$select = $this->getSelect()
                       ->where(array($whatever => $value));

        $entity = $this->select($select)->current();
        $this->getEventManager()->trigger('find', $this, array('entity' => $entity));
        return $entity;
	}
}
