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
     * Process the current request
     *
     * @param array $request The current request parameters. Leave as null to default to use $_REQUEST.
     * @return \Hybrid_Endpoint|mixed
     */
    public function endpoint($request = null);

    /**
     * A generic function to logout all connected provider at once
     *
     * @return $this|mixed
     */
    public function clearProviders();
}
