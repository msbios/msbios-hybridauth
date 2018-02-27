<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Hybridauth;

/**
 * Interface HybridauthAwareInterface
 * @package MSBios\Hybridauth
 */
interface HybridauthAwareInterface
{
    /**
     * @return HybridauthInterface
     */
    public function getHybridauth();

    /**
     * @param HybridauthInterface $hybridauth
     * @return $this
     */
    public function setHybridauth(HybridauthInterface $hybridauth);
}
