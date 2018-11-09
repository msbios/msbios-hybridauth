<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 * @link https://github.com/RWOverdijk/AssetManager
 */
namespace MSBios\Hybridauth;

use MSBios\AutoloaderAwareInterface;
use MSBios\AutoloaderAwareTrait;
use MSBios\ModuleAwareInterface;
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
    const VERSION = '1.0.11';

    use AutoloaderAwareTrait;

    /**
     * Returns configuration to merge with application configuration
     *
     * @return array|\Traversable
     */
    public function getConfig()
    {
        return include __DIR__ . '/../config/module.config.php';
    }

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
                new HybridauthManagerInitializer
            ]
        ];
    }
}
