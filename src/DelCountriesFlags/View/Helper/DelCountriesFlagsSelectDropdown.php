<?php
namespace DelCountriesFlags\View\Helper;

use Zend\View\Helper\AbstractHelper;
use Zend\View\Model\ViewModel;
use Zend\ServiceManager\ServiceManagerAwareInterface;
use Zend\ServiceManager\ServiceManager;

class DelCountriesFlagsSelectDropdown extends AbstractHelper implements ServiceManagerAwareInterface
{
	/**
     * $var string template used for view
     */
    protected $viewTemplate;

        /**
     * @var ServiceManager
     */
    protected $serviceManager;
    
	/**
     * __invoke
     *
     * @param string $selected //eg GBR, USA etc
     * @access public
     * @return string
     */
    public function __invoke($selected = null)
    {
        
	    	$sm = $this->getServiceManager();
			$sm = $sm->getServiceLocator();
	        $service = $sm->get('delcountriesflags_service');
	        $select = $service->getCountriesFormSelectElement();
			return $select;
    }
	
	/**
     * @param string $viewTemplate
     * @return NewUsers
     */
    public function setViewTemplate($viewTemplate)
    {
        $this->viewTemplate = $viewTemplate;
        return $this;
    }

    /**
     * Retrieve service manager instance
     *
     * @return ServiceManager
     */
    public function getServiceManager()
    {
        return $this->serviceManager;
    }

    /**
     * Set service manager instance
     *
     * @param ServiceManager $locator
     * @return DelCountriesFlagsDropdown
     */
    public function setServiceManager(ServiceManager $serviceManager)
    {
        $this->serviceManager = $serviceManager;
        return $this;
    }
}