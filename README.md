Add this to your modules array in application config:
'DelCountriesFlags'

to get a country entity in your controller:

$this->country = $this->getCountryService()->getCountry('ESP'); //or GBR, USA, etc
    	return new ViewModel(array(
    		'country' => $this->country
    	));

to get an flag image:

http://yoursite/flag/medium/ESP

sizes:
tiny
small
medium
large