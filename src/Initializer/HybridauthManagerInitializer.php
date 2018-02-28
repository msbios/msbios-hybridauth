<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Hybridauth\Initializer;

use Interop\Container\ContainerInterface;
use MSBios\Hybridauth\HybridauthManager;
use MSBios\Hybridauth\HybridauthManagerAwareInterface;
use Zend\ServiceManager\Initializer\InitializerInterface;

/**
 * Class HybridauthManagerInitializer
 * @package MSBios\Hybridauth\Initializer
 */
class HybridauthManagerInitializer implements InitializerInterface
{
    /**
     * Initialize the given instance
     *
     * @param  ContainerInterface $container
     * @param  object $instance
     * @return void
     */
    public function __invoke(ContainerInterface $container, $instance)
    {
        if ($instance instanceof HybridauthManagerAwareInterface) {
            $instance->setHybridauthManager(
                $container->get(HybridauthManager::class)
            );
        }
    }

    /**
     * @param $an_array
     * @return HybridauthManagerInitializer
     */
    public static function __set_state($an_array)
    {
        return new self();
    }
}
