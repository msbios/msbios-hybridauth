<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Hybridauth;

return [

    'service_manager' => [
        'factories' => [
            Hybridauth::class =>
                Factory\HybridauthFactory::class
        ]
    ]
];