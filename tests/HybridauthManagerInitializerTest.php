<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBiosTest\Hybridauth;

use MSBios\Hybridauth\HybridauthManagerInitializer;
use PHPUnit\Framework\TestCase;
use Zend\ServiceManager\Initializer\InitializerInterface;
use Zend\Test\Util\ModuleLoader;

/**
 * Class HybridauthManagerInitializerTest
 * @package MSBiosTest\Hybridauth
 */
class HybridauthManagerInitializerTest extends TestCase
{
    public function testCallInvokeMethod()
    {
        /** @var InitializerInterface $instance */
        $instance = new HybridauthManagerInitializer;
        $this->assertInstanceOf(InitializerInterface::class, $instance);

        /** @var ModuleLoader $loader */
        $loader = new ModuleLoader(require_once __DIR__ . '/../config/application.config.php');

        $instance->__invoke($loader->getServiceManager(), new class
        {
            // ...
        });
    }

    public function testCallSetStateMethod()
    {
        $this->assertInstanceOf(
            HybridauthManagerInitializer::class,
            HybridauthManagerInitializer::__set_state([])
        );
    }
}
