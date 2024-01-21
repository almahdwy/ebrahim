<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd751713988987e9331980363e24189ce
{
    public static $prefixLengthsPsr4 = array (
        ' ' => 
        array (
            ' Maharah\\Traits\\' => 16,
            ' Maharah\\Interfaces\\' => 20,
            ' Maharah\\Classes\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        ' Maharah\\Traits\\' => 
        array (
            0 => __DIR__ . '/../..' . '/traits',
        ),
        ' Maharah\\Interfaces\\' => 
        array (
            0 => __DIR__ . '/../..' . '/interfaces',
        ),
        ' Maharah\\Classes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd751713988987e9331980363e24189ce::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd751713988987e9331980363e24189ce::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd751713988987e9331980363e24189ce::$classMap;

        }, null, ClassLoader::class);
    }
}
