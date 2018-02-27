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
use MSBios\ModuleAwareTrait;
use MSBios\ModuleInterface;

/**
 * Class Module
 * @package MSBios\Hybridauth
 */
class Module implements
    ModuleInterface,
    ModuleAwareInterface,
    AutoloaderAwareInterface
{
    /** @const VERSION */
    const VERSION = '1.0.2';

    use ModuleAwareTrait;
    use AutoloaderAwareTrait;
}
