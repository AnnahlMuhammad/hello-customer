<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9d814e80e79e7803ea9e6563d9089e8c
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Annahl\\HelloCustomer\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Annahl\\HelloCustomer\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit9d814e80e79e7803ea9e6563d9089e8c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9d814e80e79e7803ea9e6563d9089e8c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9d814e80e79e7803ea9e6563d9089e8c::$classMap;

        }, null, ClassLoader::class);
    }
}