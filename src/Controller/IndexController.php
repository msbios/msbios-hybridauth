<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Hybridauth\Controller;

use MSBios\Hybridauth\HybridauthManagerAwareInterface;
use MSBios\Hybridauth\HybridauthManagerAwareTrait;
use Zend\Mvc\Controller\AbstractActionController;

/**
 * Class IndexController
 * @package MSBios\Hybridauth\Controller
 */
class IndexController extends AbstractActionController implements HybridauthManagerAwareInterface
{
    use HybridauthManagerAwareTrait;

    /**
     * @return void|\Zend\View\Model\ViewModel
     */
    public function indexAction()
    {
        $this->getHybridauthManager()->endpoint();
    }
}
