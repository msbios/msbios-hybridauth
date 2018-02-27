<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Hybridauth\Controller;

use Zend\Mvc\Controller\AbstractActionController;

/**
 * Class IndexController
 * @package MSBios\Hybridauth\Controller
 */
class IndexController extends AbstractActionController
{
    /**
     *
     */
    public function indexAction()
    {
        \Hybrid_Endpoint::process();
    }
}
