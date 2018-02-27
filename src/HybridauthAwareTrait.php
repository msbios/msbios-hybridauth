<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Hybridauth;

/**
 * Class HybridauthAwareTrait
 * @package MSBios\Hybridauth
 */
trait HybridauthAwareTrait
{
    /** @var HybridauthInterface */
    protected $hybridauth;

    /**
     * @return HybridauthInterface
     */
    public function getHybridauth()
    {
        return $this->hybridauth;
    }

    /**
     * @param HybridauthInterface $hybridauth
     * @return $this
     */
    public function setHybridauth(HybridauthInterface $hybridauth)
    {
        $this->hybridauth = $hybridauth;
        return $this;
    }
}
