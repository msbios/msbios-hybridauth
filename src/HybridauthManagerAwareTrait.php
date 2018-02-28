<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Hybridauth;

/**
 * Class HybridauthManagerAwareTrait
 * @package MSBios\Hybridauth
 */
trait HybridauthManagerAwareTrait
{
    /** @var HybridauthManagerInterface */
    protected $hybridauthManager;

    /**
     * @return HybridauthManagerInterface
     */
    public function getHybridauthManager()
    {
        return $this->hybridauthManager;
    }

    /**
     * @param HybridauthManagerInterface $hybridauthManager
     * @return $this
     */
    public function setHybridauthManager(HybridauthManagerInterface $hybridauthManager)
    {
        $this->hybridauthManager = $hybridauthManager;
        return $this;
    }
}
