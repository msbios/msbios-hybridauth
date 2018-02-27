<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Hybridauth\Controller;

use MSBios\Application\Controller\IndexController as DefaultIndexController;

/**
 * Class IndexController
 * @package MSBios\Hybridauth\Controller
 */
class IndexController extends DefaultIndexController
{
    /**
     *
     */
    public function endpointAction()
    {
        \Hybrid_Endpoint::process();
    }
}
