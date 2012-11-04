<?php

namespace DelCountriesFlags\Mapper;

interface CountryInterface
{
    public function getCountryById();
	public function getCountryByName();
    public function getCountryByCapsName();
	public function getCountryByISO();
	public function getCountryByNumCode();
}
