<?php
/**
 * If you need an environment-specific system or application configuration,
 * there is an example in the documentation
 * @see https://docs.zendframework.com/tutorials/advanced-config/#environment-specific-system-configuration
 * @see https://docs.zendframework.com/tutorials/advanced-config/#environment-specific-application-configuration
 */
return [
    // Retrieve list of modules used in this application.
    'modules' => [
        'MSBios\Session',
        'Zend\Cache',
        'Zend\Serializer',
        'Zend\Validator',
        'Zend\Session',
        'Zend\Navigation',
        'Zend\Router',
        'Zend\Mvc\Plugin\FilePrg',
        'Zend\Form',
        'Zend\Hydrator',
        'Zend\InputFilter',
        'Zend\Filter',
        'Zend\Mvc\Plugin\FlashMessenger',
        'Zend\Mvc\Plugin\Identity',
        'Zend\Mvc\Plugin\Prg',
        'Zend\I18n',

        'MSBios\Cache',
        'MSBios\View',
        'MSBios\Navigation',
        'MSBios\Application',
        'MSBios\Theme',
        'MSBios\Widget',
        'MSBios\I18n',
        'MSBios\Assetic',
        'MSBios\Hybridauth',

        'ZendDeveloperTools'
    ],
    'module_listener_options' => [
        'module_paths' => [
            './module',
            './vendor',
        ],
        'config_glob_paths' => [
            realpath(__DIR__) . '/autoload/{{,*.}global,{,*.}local}.php',
        ],
        'config_cache_enabled' => false,
        // 'config_cache_key' => 'application.config.cache',
        'module_map_cache_enabled' => false,
        // 'module_map_cache_key' => 'application.module.cache',
        'cache_dir' => 'data/cache/',
    ],
];
