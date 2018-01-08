<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 * @link https://github.com/RWOverdijk/AssetManager
 */
namespace MSBios\Hybridauth;

use MSBios\ModuleInterface;

/**
 * Class Module
 * @package MSBios\Hybridauth
 */
class Module implements
    ModuleInterface,
    AutoloaderProviderInterface
{
    const VERSION = '1.0.0';

    /**
     * @return mixed
     */
    public function getConfig()
    {
        return include __DIR__ . '/../config/module.config.php';
    }

    ///**
    // * Listen to the bootstrap event
    // *
    // * @param EventInterface $e
    // * @return array
    // */
    //public function onBootstrap(EventInterface $e)
    //{
    //    /** @var ApplicationInterface $target */
    //    $target = $e->getTarget();
    //
    //    /** @var ServiceLocatorInterface $serviceManager */
    //    $serviceManager = $target->getServiceManager();
    //
    //    (new LazyListenerAggregate(
    //        $serviceManager->get(self::class)['listeners'],
    //        $serviceManager
    //    ))->attach($target->getEventManager());
    //}

    /**
     * Return an array for passing to Zend\Loader\AutoloaderFactory.
     *
     * @return array
     */
    public function getAutoloaderConfig()
    {
        return [
            AutoloaderFactory::STANDARD_AUTOLOADER => [
                StandardAutoloader::LOAD_NS => [
                    __NAMESPACE__ => __DIR__,
                ],
            ],
        ];
    }
}
