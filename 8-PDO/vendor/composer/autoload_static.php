<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1fd6c474a01db45931f86988d7fd4c6d
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Database\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Database\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Database',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1fd6c474a01db45931f86988d7fd4c6d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1fd6c474a01db45931f86988d7fd4c6d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1fd6c474a01db45931f86988d7fd4c6d::$classMap;

        }, null, ClassLoader::class);
    }
}