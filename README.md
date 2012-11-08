delboy1978uk/del-countries-flags
A module with 235 countries,4 differently sized flag images for each country, and a form select element, with view helper. 

Installation:
Add this to your modules array in application config:   'DelCountriesFlags'


To get a Country entity in your controller:
$countryService = $this->getServiceLocator()->get('delcountriesflags_service');
$country = $countryService()->getCountry('ESP'); //or GBR, USA, etc

To get a dropdown select element of countries:
$select = $countryService()->getCountriesFormSelectElement();

Flag image urls:
http://yoursite/flag/medium/FRA

Url allowed sizes:
tiny
small
medium
large

View Helpers:
echo $this->delCountriesFlagsName('ESP'); //Country name
echo $this->delCountriesFlagsFlag('ESP','tiny'); //Flag image, same sizes as above
echo $this->formSelect($this->delCountriesFlagsSelectDropdown());


Flag images from <a href="http://www.senojflags.com">Flags of all Countries</a>.
If you like and use these flags please give them a link back to their site!