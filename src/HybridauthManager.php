<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Hybridauth;

/**
 * Class HybridauthManager
 * @package MSBios\Hybridauth
 */
class HybridauthManager extends \Hybrid_Auth implements HybridauthManagerInterface
{
    /**
     * @inheritdoc
     */
    public function endpoint()
    {
        \Hybrid_Endpoint::process();
    }
}
