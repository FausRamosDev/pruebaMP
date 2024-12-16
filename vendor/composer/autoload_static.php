<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit33a83d9888a54add123c483055b7e9b3
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MercadoPago\\' => 12,
        ),
        'A' => 
        array (
            'Admin\\PruebaMp\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MercadoPago\\' => 
        array (
            0 => __DIR__ . '/..' . '/mercadopago/dx-php/src/MercadoPago',
        ),
        'Admin\\PruebaMp\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit33a83d9888a54add123c483055b7e9b3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit33a83d9888a54add123c483055b7e9b3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit33a83d9888a54add123c483055b7e9b3::$classMap;

        }, null, ClassLoader::class);
    }
}
