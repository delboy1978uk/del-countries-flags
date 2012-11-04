<?php

namespace DelCountriesFlags\Mapper;

use Zend\Stdlib\Hydrator\ClassMethods;
use DelCountriesFlags\Entity\CountryInterface as CountryEntityInterface;

class CountryHydrator extends ClassMethods
{
    /**
     * Extract values from an object
     *
     * @param  object $object
     * @return array
     * @throws Exception\InvalidArgumentException
     */
    public function extract($object)
    {
        if (!$object instanceof CountryEntityInterface) {
            throw new Exception\InvalidArgumentException('$object must be an instance of DelCountriesFlags\Entity\CountryInterface');
        }
        /* @var $object UserInterface*/
        $data = parent::extract($object);
        $data = $this->mapField('id', 'id', $data);
        return $data;
    }

    /**
     * Hydrate $object with the provided $data.
     *
     * @param  array $data
     * @param  object $object
     * @return CountryInterface
     * @throws Exception\InvalidArgumentException
     */
    public function hydrate(array $data, $object)
    {
        if (!$object instanceof CountryEntityInterface) {
            throw new Exception\InvalidArgumentException('$object must be an instance of DelCountriesFlags\Entity\CountryInterface');
        }
        $data = $this->mapField('id', 'id', $data);
        return parent::hydrate($data, $object);
    }

    protected function mapField($keyFrom, $keyTo, array $array)
    {
        $array[$keyTo] = $array[$keyFrom];
        unset($array[$keyFrom]);
        return $array;
    }
}
