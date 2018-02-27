<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Hybridauth\Factory;

use MSBios\Factory\AbstractModuleFactory;
use MSBios\Hybridauth\Module;

/**
 * Class ModuleFactory
 * @package MSBios\Hybridauth\Factory
 */
class ModuleFactory extends AbstractModuleFactory
{
    /**
     * @return mixed Module::class
     */
    protected function getModuleName()
    {
        return Module::class;
    }
}
