<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Hybridauth;

use MSBios\Factory\ModuleFactory;
use Zend\Router\Http\Segment;
use Zend\ServiceManager\Factory\InvokableFactory;

return [

    'router' => [
        'routes' => [
            'hybridauth' => [
                'type' => Segment::class,
                'options' => [
                    'route' => '/hybridauth[/]',
                    'defaults' => [
                        'controller' => Controller\IndexController::class,
                        'action' => 'index',
                    ],
                ],
            ],
        ],
    ],

    'controllers' => [
        'factories' => [
            Controller\IndexController::class =>
                InvokableFactory::class
        ],
        'aliases' => [
            \MSBios\Application\Controller\IndexController::class =>
                Controller\IndexController::class,
        ]
    ],

    'service_manager' => [
        'factories' => [
            HybridauthManager::class =>
                Factory\HybridauthManagerFactory::class,
            Module::class =>
                ModuleFactory::class
        ]
    ],

    Module::class => [

        "base_url" => "http://localhost/hybridauth-git/hybridauth/",

        "providers" => [
            // openid providers
            "OpenID" => [
                "enabled" => true,
            ],
            "Yahoo" => [
                "enabled" => true,
                "keys" => ["id" => "", "secret" => ""],
            ],
            "AOL" => [
                "enabled" => true,
            ],
            "Google" => [
                "enabled" => true,
                "keys" => ["id" => "", "secret" => ""],
            ],
            "Facebook" => [
                "enabled" => true,
                "keys" => ["id" => "", "secret" => ""],
                "trustForwarded" => false,
            ],
            "Twitter" => [
                "enabled" => true,
                "keys" => ["key" => "", "secret" => ""],
                "includeEmail" => false,
            ],
            // windows live
            "Live" => [
                "enabled" => true,
                "keys" => ["id" => "", "secret" => ""],
            ],
            "LinkedIn" => [
                "enabled" => true,
                "keys" => ["id" => "", "secret" => ""],
                "fields" => [],
            ],
            "Foursquare" => [
                "enabled" => true,
                "keys" => ["id" => "", "secret" => ""],
            ],
        ],

        // If you want to enable logging, set 'debug_mode' to true.
        // You can also set it to
        // - "error" To log only error messages. Useful in production
        // - "info" To log info and error messages (ignore debug messages)
        "debug_mode" => false,

        // Path to file writable by the web server. Required if 'debug_mode' is not false
        "debug_file" => "",
    ]
];
