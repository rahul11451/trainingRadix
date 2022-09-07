<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit74242e882d766887554ea5a24c76d669
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'Box\\Spout\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Box\\Spout\\' => 
        array (
            0 => __DIR__ . '/..' . '/box/spout/src/Spout',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit74242e882d766887554ea5a24c76d669::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit74242e882d766887554ea5a24c76d669::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit74242e882d766887554ea5a24c76d669::$classMap;

        }, null, ClassLoader::class);
    }
}
