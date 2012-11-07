<?php

namespace DelCountriesFlags\Form\Element;

use Zend\Form\Element\Select as ZendSelect;

class Select extends ZendSelect
{
	public function init()
	{
	     $this->setOptions(array(
	             'name' => 'country',
	             'options' => array(
	                     'label' => 'Country',
	                     'empty_option' => 'Select a country',
	                     'value_options' => array(
	                             '0' => 'French',
	                             '1' => 'English',
	                             '2' => 'Japanese',
	                             '3' => 'Chinese',
	                     ),
	             )
	     ));
	}
}