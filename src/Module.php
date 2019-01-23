<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 * @link https://github.com/RWOverdijk/AssetManager
 */
namespace MSBios\Hybridauth;

use Zend\ModuleManager\Feature\ControllerProviderInterface;

/**
 * Class Module
 * @package MSBios\Hybridauth
 */
class Module extends \MSBios\Module implements ControllerProviderInterface
{
    /** @const VERSION */
    const VERSION = '1.0.12';

    /**
     * @inheritdoc
     *
     * @return string
     */
    protected function getDir()
    {
        return __DIR__;
    }

    /**
     * @inheritdoc
     *
     * @return string
     */
    protected function getNamespace()
    {
        return __NAMESPACE__;
    }

    /**
     * @inheritdoc
     *
     * @return array|\Zend\ServiceManager\Config
     */
    public function getControllerConfig()
    {
        return [
            'initializers' => [
                HybridauthManagerInitializer::class =>
                    new HybridauthManagerInitializer
            ]
        ];
    }
}
