<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\Hybridauth\Factory;

use Interop\Container\ContainerInterface;
use MSBios\Hybridauth\Hybridauth;
use MSBios\Hybridauth\Module;
use Zend\ServiceManager\Factory\FactoryInterface;

/**
 * Class HybridauthFactory
 * @package MSBios\Hybridauth\Factory
 */
class HybridauthFactory implements FactoryInterface
{
    /**
     * @param ContainerInterface $container
     * @param string $requestedName
     * @param array|null $options
     * @return Hybridauth
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        return new Hybridauth(
            $container->get(Module::class)
        );
    }
}
