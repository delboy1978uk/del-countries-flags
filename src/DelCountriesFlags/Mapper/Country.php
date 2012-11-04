<?php

namespace DelCountriesFlags\Mapper;

use DelCountriesFlags\Mapper\AbstractDbMapper;
use DelCountriesFlags\Entity\CountryInterface as CountryEntityInterface;

class Country extends AbstractDbMapper implements CountryInterface
{
    protected $tableName  = 'countries';

    public function getCountryById($countryid)
    {
    	$select = $this->getSelect()
                       ->where(array('countryid' => $countryid));

        $entity = $this->select($select)->current();
        $this->getEventManager()->trigger('find', $this, array('entity' => $entity));
        return $entity;
    }
    
    public function findByEmail($email)
    {
        $select = $this->getSelect()
                       ->where(array('email' => $countryid));

        $entity = $this->select($select)->current();
        $this->getEventManager()->trigger('find', $this, array('entity' => $entity));
        return $entity;
    }
}
