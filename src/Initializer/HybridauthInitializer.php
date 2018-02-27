<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Hybridauth\Initializer;

use Interop\Container\ContainerInterface;
use MSBios\Hybridauth\Hybridauth;
use MSBios\Hybridauth\HybridauthAwareInterface;
use Zend\ServiceManager\Initializer\InitializerInterface;

/**
 * Class HybridauthInitializer
 * @package MSBios\Hybridauth\Initializer
 */
class HybridauthInitializer implements InitializerInterface
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
        if ($instance instanceof HybridauthAwareInterface) {
            $instance->setHybridauth(
                $container->get(Hybridauth::class)
            );
        }
    }

    /**
     * @param $an_array
     * @return HybridauthInitializer
     */
    public static function __set_state($an_array)
    {
        return new self();
    }
}
