<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitef561bec17a4bf10ecea746b3e33e2ee
{
    public static $files = array (
        '9e202fd1679a2fdf11d5ec935ea4d9f0' => __DIR__ . '/../..' . '/src/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Webtop\\StarterPlugin\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Webtop\\StarterPlugin\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitef561bec17a4bf10ecea746b3e33e2ee::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitef561bec17a4bf10ecea746b3e33e2ee::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitef561bec17a4bf10ecea746b3e33e2ee::$classMap;

        }, null, ClassLoader::class);
    }
}
