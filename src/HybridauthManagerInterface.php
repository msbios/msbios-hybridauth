<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Hybridauth;

/**
 * Interface HybridauthManagerInterface
 * @package MSBios\Hybridauth
 */
interface HybridauthManagerInterface
{
    /**
     * @return mixed
     */
    public function endpoint();

    /**
     * @return mixed
     */
    public function clearProviders();
}
