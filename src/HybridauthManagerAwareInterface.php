<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Hybridauth;

/**
 * Interface HybridauthManagerAwareInterface
 * @package MSBios\Hybridauth
 */
interface HybridauthManagerAwareInterface
{
    /**
     * @return HybridauthManagerInterface
     */
    public function getHybridauthManager();

    /**
     * @param HybridauthManagerInterface $hybridauth
     * @return $this
     */
    public function setHybridauthManager(HybridauthManagerInterface $hybridauth);
}
