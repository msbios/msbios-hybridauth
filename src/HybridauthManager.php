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
     *
     * @param array $request The current request parameters. Leave as null to default to use $_REQUEST.
     * @return \Hybrid_Endpoint|mixed
     */
    public function endpoint($request = null)
    {
        return \Hybrid_Endpoint::process($request);
    }

    /**
     * @inheritdoc
     *
     * @return $this|mixed
     */
    public function clearProviders()
    {
        if (count(self::getProviders())) {
            self::logoutAllProviders();
        }

        return $this;
    }
}
