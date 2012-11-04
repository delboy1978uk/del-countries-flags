<?php 

namespace DelCountriesFlags\Entity;

class Country implements CountryInterface
{
	/**
	 * @var string
	 */
    protected $countryid;
    
    /**
	 * @var string
	 */
    protected $name;
    
    /**
	 * @var string
	 */
    protected $country;
    
    /**
	 * @var string
	 */
    protected $iso;
    
    /**
	 * @var int
	 */
    protected $numcode;
    
    /**
	 * @var string
	 */
    protected $flag;
	
	/**
     * Get id.
     *
     * @return string
     */
    public function getCountryId()
    {
    	return $this->countryid;
    }

    /**
     * Get country's name.
     *
     * @return string
     */
    public function getCountryName()
    {
    	return $this->country;
    }
    
    /**
     * Get country's name.
     *
     * @return string
     */
    public function getCountryNameCaps()
    {
    	return $this->name;
    }

    /**
     * Get country's ISO code
     *
     * @return string
     */
    public function getCountryISO()
    {
    	return $this->iso;
    }

    /**
     * Get country's numerical code
     *
     * @return int
     */
    public function getNumCode()
	{
    	return $this->numcode;
    }

    /**
     * Get country's flag file name
     *
     * @return string
     */
    public function getFlag($email)
	{
    	return $this->flag;
    }
}