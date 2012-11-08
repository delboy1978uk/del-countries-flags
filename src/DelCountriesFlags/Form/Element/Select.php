<?php

namespace DelCountriesFlags\Form\Element;

use Zend\Form\Element\Select as ZendSelect;

class Select extends ZendSelect 
{
	public function __construct($name = 'country')
	{
	    $this->setName($name); 
	    $this->setOptions
	    (
	    	array
	    	(
	    		'label' => 'Country',
	            'empty_option' => 'Select a country',
	        )
	    );
	}
}