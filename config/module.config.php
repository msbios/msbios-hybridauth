<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Hybridauth;

use MSBios\Hybridauth\Provider\Facebook;
use MSBios\Hybridauth\Provider\Google;
use MSBios\Hybridauth\Provider\Twitter;
use MSBios\Hybridauth\Provider\Yandex;

return [

    'service_manager' => [
        'factories' => [
            Hybridauth::class =>
                Factory\HybridauthFactory::class
        ]
    ],

    Module::class => [

        'callback' => null,

        'providers' => [
            Facebook::class => [
                "enabled" => true,
            ],
            Google::class => [
                "enabled" => true,
            ],
            Twitter::class => [
                "enabled" => true,
                "keys" => [
                    "key" => "",
                    "secret" => ""
                ]
            ],
            Yandex::class => [
                "enabled" => true,
            ]
        ]

    ]
];
