<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite4a25afee3cbd717dc53a2355d0fdcdb
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'ScssPhp\\ScssPhp\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ScssPhp\\ScssPhp\\' => 
        array (
            0 => __DIR__ . '/..' . '/scssphp/scssphp/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite4a25afee3cbd717dc53a2355d0fdcdb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite4a25afee3cbd717dc53a2355d0fdcdb::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite4a25afee3cbd717dc53a2355d0fdcdb::$classMap;

        }, null, ClassLoader::class);
    }
}