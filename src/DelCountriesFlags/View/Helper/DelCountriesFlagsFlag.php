<?php
namespace DelCountriesFlags\View\Helper;

use Zend\View\Helper\AbstractHelper;
use Zend\View\Model\ViewModel;

class DelCountriesFlagsFlag extends AbstractHelper 
{
	/**
     * $var string template used for view
     */
    protected $viewTemplate;

    
	/**
     * __invoke
     *
     * @param string $id //eg GBR, USA etc
     * @access public
     * @return string
     */
    public function __invoke($id = null, $size = 'small')
    {
        if($id)
        {
	    	$vm = new ViewModel(array(
	            'src' => '/flag/'.$size.'/'.$id,
	        ));
	        $viewfile = $this->viewTemplate;
	        $vm->setTemplate($viewfile);
	
	        return $this->getView()->render($vm);
        }
        else
        {
        	return false;
        }
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

    
}