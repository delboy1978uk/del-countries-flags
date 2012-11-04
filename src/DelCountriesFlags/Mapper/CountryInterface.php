<?php

namespace DelCountriesFlags\Mapper;

interface CountryInterface
{
    public function getCountryById($countryid);
	public function getCountryByName($country);
    public function getCountryByCapsName($name);
	public function getCountryByISO($iso);
	public function getCountryByNumCode($numcode);
}
