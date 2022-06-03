<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd30d8f0b8d730acaf7398333f4c1a7ae
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Crud\\Tutorial\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Crud\\Tutorial\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd30d8f0b8d730acaf7398333f4c1a7ae::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd30d8f0b8d730acaf7398333f4c1a7ae::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd30d8f0b8d730acaf7398333f4c1a7ae::$classMap;

        }, null, ClassLoader::class);
    }
}
