<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2905ad90b56289033d91517493c912d3
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Component\\Yaml\\' => 23,
            'SuaGestao\\' => 10,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'N' => 
        array (
            'NFePHP\\NFe\\' => 11,
            'NFePHP\\Common\\' => 14,
        ),
        'L' => 
        array (
            'League\\Flysystem\\' => 17,
        ),
        'J' => 
        array (
            'JsonSchema\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Component\\Yaml\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/yaml',
        ),
        'SuaGestao\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'NFePHP\\NFe\\' => 
        array (
            0 => __DIR__ . '/..' . '/nfephp-org/sped-nfe/src',
        ),
        'NFePHP\\Common\\' => 
        array (
            0 => __DIR__ . '/..' . '/nfephp-org/sped-common/src',
        ),
        'League\\Flysystem\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/flysystem/src',
        ),
        'JsonSchema\\' => 
        array (
            0 => __DIR__ . '/..' . '/justinrainbow/json-schema/src/JsonSchema',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2905ad90b56289033d91517493c912d3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2905ad90b56289033d91517493c912d3::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
