<?php 

namespace DelCountriesFlags\Controller;

use DelCountriesFlags\Entity\Country;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use DelCountriesFlags\Service\Country as CountryService;

class FlagController extends AbstractActionController
{
	/**
     * @var CountryService
     */
    protected $countryService;
    
    /**
     * @var Country;
     */
    protected $country;
	
	public function indexAction()
	{
		$id = $this->getRequest->getQuery()->get('country');
		$size = $this->getRequest->getQuery()->get('size');
		$this->country = $this->getCountryService()->getCountry($id);
		$flag = $this->country->getFlag();
		switch($size)
		{
			case 'tiny':
				$path = '/tiny/';
				break;
			case 'medium':
				$path = '/medium/';
				break;
			case 'large':
				$path = '/large/';
				break;
			default:
			case 'small':
				$path = '/small/';
				break;
		}
		fopen(__DIR__.'/../Flags'.$path.File);
		return $this->response;
	}
	
	public function getCountryService()
    {
        if (!$this->countryService) {
            $this->countryService = $this->getServiceLocator()->get('delcountriesflags_service');
        }
        return $this->countryService;
    }

    public function setCountryService(CountryService $countryService)
    {
        $this->countryService = $countryService;
        return $this;
    }
}