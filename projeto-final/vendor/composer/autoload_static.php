<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1337cac2eb6416981b443ddf65bc256d
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit1337cac2eb6416981b443ddf65bc256d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1337cac2eb6416981b443ddf65bc256d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1337cac2eb6416981b443ddf65bc256d::$classMap;

        }, null, ClassLoader::class);
    }
}