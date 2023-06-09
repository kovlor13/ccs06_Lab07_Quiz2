<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf2420abeaf6875f0483eb7d299cad4f0
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitf2420abeaf6875f0483eb7d299cad4f0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf2420abeaf6875f0483eb7d299cad4f0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf2420abeaf6875f0483eb7d299cad4f0::$classMap;

        }, null, ClassLoader::class);
    }
}
