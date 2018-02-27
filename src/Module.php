<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 * @link https://github.com/RWOverdijk/AssetManager
 */
namespace MSBios\Hybridauth;

use MSBios\AutoloaderAwareInterface;
use MSBios\AutoloaderAwareTrait;
use MSBios\Hybridauth\Initializer\HybridauthInitializer;
use MSBios\ModuleAwareInterface;
use MSBios\ModuleAwareTrait;
use MSBios\ModuleInterface;
use Zend\ModuleManager\Feature\ControllerProviderInterface;

/**
 * Class Module
 * @package MSBios\Hybridauth
 */
class Module implements
    ModuleInterface,
    ModuleAwareInterface,
    AutoloaderAwareInterface,
    ControllerProviderInterface
{
    /** @const VERSION */
    const VERSION = '1.0.4';

    use ModuleAwareTrait;
    use AutoloaderAwareTrait;

    /**
     * Expected to return \Zend\ServiceManager\Config object or array to seed
     * such an object.
     *
     * @return array|\Zend\ServiceManager\Config
     */
    public function getControllerConfig()
    {
        return [
            'initializers' => [
                new HybridauthInitializer
            ]
        ];
    }
}
