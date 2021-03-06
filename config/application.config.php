<?php
ini_set('display_errors', 1);

return array(
    'modules' => array(
        'ZF\DevelopmentMode',
        'AssetManager',
        'ZfcBase',
        'ZfcUser',
        'ScnSocialAuth',
        'EdpGithub',
        'Application',
        'User',
        'EdpModuleLayouts',
        'ZfModule',
        'EdpMarkdown',
    ),
    'module_listener_options' => array(
        'config_glob_paths'    => array(
            'config/autoload/{,*.}{global,local}.php',
        ),
        'module_paths' => array(
            './module',
            './vendor',
        ),
    ),
);
