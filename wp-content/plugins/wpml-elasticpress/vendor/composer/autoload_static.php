<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit68376a418159ed6bd20eac48beb813cf
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WPML\\ElasticPress\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WPML\\ElasticPress\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit68376a418159ed6bd20eac48beb813cf::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit68376a418159ed6bd20eac48beb813cf::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit68376a418159ed6bd20eac48beb813cf::$classMap;

        }, null, ClassLoader::class);
    }
}