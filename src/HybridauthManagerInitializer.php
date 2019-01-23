<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Hybridauth;

use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Initializer\InitializerInterface;

/**
 * Class HybridauthManagerInitializer
 * @package MSBios\Hybridauth
 */
class HybridauthManagerInitializer implements InitializerInterface
{
    /**
     * @inheritdoc
     *
     * @param ContainerInterface $container
     * @param object $instance
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
     * @inheritdoc
     *
     * @param $an_array
     * @return HybridauthManagerInitializer
     */
    public static function __set_state($an_array)
    {
        return new self();
    }
}
