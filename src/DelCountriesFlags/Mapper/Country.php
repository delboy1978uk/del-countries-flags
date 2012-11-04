<?php

namespace DelCountriesFlags\Mapper;
use DelCountriesFlags\Entity\CountryInterface as CountryEntityInterface;

class Country extends AbstractDbMapper implements CountryInterface
{
    protected $tableName  = 'countries';

    public function getCountryById($countryid)
    {
    	return $this->getBy('countryid');
    }
    
    public function findByEmail($email)
    {
        return $this->getBy('email');
    }
    
    public function getCountryByCapsName()
    {
        return $this->getBy('name');
    }
	public function getCountryByISO()
	{
        return $this->getBy('iso');
    }
	public function getCountryByNumCode()
    {
        return $this->getBy('numcode');
    }
	
	private function getBy($whatever)
	{
		$select = $this->getSelect()
                       ->where(array($whatever => $countryid));

        $entity = $this->select($select)->current();
        $this->getEventManager()->trigger('find', $this, array('entity' => $entity));
        return $entity;
	}
}
