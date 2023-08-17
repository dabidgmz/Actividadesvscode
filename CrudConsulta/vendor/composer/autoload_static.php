<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0e65e06976f75bb593843e6cfa69b219
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit0e65e06976f75bb593843e6cfa69b219::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0e65e06976f75bb593843e6cfa69b219::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0e65e06976f75bb593843e6cfa69b219::$classMap;

        }, null, ClassLoader::class);
    }
}
