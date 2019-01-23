<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\Hybridauth\Factory;

use Interop\Container\ContainerInterface;
use MSBios\Hybridauth\HybridauthManager;
use MSBios\Hybridauth\Module;
use Zend\ServiceManager\Factory\FactoryInterface;

/**
 * Class HybridauthManagerFactory
 * @package MSBios\Hybridauth\Factory
 */
class HybridauthManagerFactory implements FactoryInterface
{
    /**
     * @inheritdoc
     *
     * @param ContainerInterface $container
     * @param string $requestedName
     * @param array|null $options
     * @return HybridauthManager|object
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        return new HybridauthManager(
            $container->get(Module::class)
        );
    }
}
