<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite7e855edbf9b7281cd07fffa6a674a38
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Dd\\Ptc3\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Dd\\Ptc3\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInite7e855edbf9b7281cd07fffa6a674a38::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite7e855edbf9b7281cd07fffa6a674a38::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite7e855edbf9b7281cd07fffa6a674a38::$classMap;

        }, null, ClassLoader::class);
    }
}