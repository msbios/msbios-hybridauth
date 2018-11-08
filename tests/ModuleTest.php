<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBiosTest\Hybridauth;

use MSBios\AutoloaderAwareInterface;
use MSBios\Hybridauth\Module;
use MSBios\ModuleInterface;
use PHPUnit\Framework\TestCase;
use Zend\ModuleManager\Feature\ControllerProviderInterface;

/**
 * Class ModuleTest
 * @package MSBiosTest\Hybridauth
 */
class ModuleTest1 extends TestCase
{
    /** @var Module */
    protected $instance;

    /**
     * @constructor
     */
    protected function setUp()
    {
        parent::setUp();
        $this->instance = new Module;
    }

    /**
     *
     */
    public function testGetConfig()
    {
        $this->assertInstanceOf(ModuleInterface::class, $this->instance);
        $this->assertInternalType('array', $this->instance->getConfig());
    }

    /**
     *
     */
    public function testGetAutoloaderConfig()
    {
        $this->assertInstanceOf(AutoloaderAwareInterface::class, $this->instance);
        $this->assertInternalType('array', $this->instance->getAutoloaderConfig());
    }

    /**
     *
     */
    public function testGetControllerConfig()
    {
        $this->assertInstanceOf(ControllerProviderInterface::class, $this->instance);
        $this->assertInternalType('array', $this->instance->getControllerConfig());
    }
}
