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


Flag images from <a href="http://www.senojflags.com">Flags of all Countries</a>.
If you use these flags please give them a link back to their site!