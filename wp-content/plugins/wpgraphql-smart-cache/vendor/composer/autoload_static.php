<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2e299eda5dd2b8c3067fa349ec23c34b
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WPGraphQL\\SmartCache\\' => 21,
            'WPGraphQL\\PersistedQueries\\' => 27,
            'WPGraphQL\\Cache\\' => 16,
        ),
        'A' => 
        array (
            'Appsero\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WPGraphQL\\SmartCache\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'WPGraphQL\\PersistedQueries\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'WPGraphQL\\Cache\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Cache',
        ),
        'Appsero\\' => 
        array (
            0 => __DIR__ . '/..' . '/appsero/client/src',
        ),
    );

    public static $classMap = array (
        'Appsero\\Client' => __DIR__ . '/..' . '/appsero/client/src/Client.php',
        'Appsero\\Insights' => __DIR__ . '/..' . '/appsero/client/src/Insights.php',
        'Appsero\\License' => __DIR__ . '/..' . '/appsero/client/src/License.php',
        'Appsero\\Updater' => __DIR__ . '/..' . '/appsero/client/src/Updater.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'WPGraphQL\\SmartCache\\AdminErrors' => __DIR__ . '/../..' . '/src/AdminErrors.php',
        'WPGraphQL\\SmartCache\\Admin\\Editor' => __DIR__ . '/../..' . '/src/Admin/Editor.php',
        'WPGraphQL\\SmartCache\\Admin\\Settings' => __DIR__ . '/../..' . '/src/Admin/Settings.php',
        'WPGraphQL\\SmartCache\\Cache\\Collection' => __DIR__ . '/../..' . '/src/Cache/Collection.php',
        'WPGraphQL\\SmartCache\\Cache\\Invalidation' => __DIR__ . '/../..' . '/src/Cache/Invalidation.php',
        'WPGraphQL\\SmartCache\\Cache\\Query' => __DIR__ . '/../..' . '/src/Cache/Query.php',
        'WPGraphQL\\SmartCache\\Cache\\Results' => __DIR__ . '/../..' . '/src/Cache/Results.php',
        'WPGraphQL\\SmartCache\\Document' => __DIR__ . '/../..' . '/src/Document.php',
        'WPGraphQL\\SmartCache\\Document\\Description' => __DIR__ . '/../..' . '/src/Document/Description.php',
        'WPGraphQL\\SmartCache\\Document\\Grant' => __DIR__ . '/../..' . '/src/Document/Grant.php',
        'WPGraphQL\\SmartCache\\Document\\Loader' => __DIR__ . '/../..' . '/src/Document/Loader.php',
        'WPGraphQL\\SmartCache\\Document\\MaxAge' => __DIR__ . '/../..' . '/src/Document/MaxAge.php',
        'WPGraphQL\\SmartCache\\Storage\\Ephemeral' => __DIR__ . '/../..' . '/src/Storage/Ephemeral.php',
        'WPGraphQL\\SmartCache\\Storage\\Transient' => __DIR__ . '/../..' . '/src/Storage/Transient.php',
        'WPGraphQL\\SmartCache\\Storage\\WpCache' => __DIR__ . '/../..' . '/src/Storage/WpCache.php',
        'WPGraphQL\\SmartCache\\Utils' => __DIR__ . '/../..' . '/src/Utils.php',
        'WPGraphQL\\SmartCache\\ValidationRules\\AllowDenyQueryDocument' => __DIR__ . '/../..' . '/src/ValidationRules/AllowDenyQueryDocument.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2e299eda5dd2b8c3067fa349ec23c34b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2e299eda5dd2b8c3067fa349ec23c34b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2e299eda5dd2b8c3067fa349ec23c34b::$classMap;

        }, null, ClassLoader::class);
    }
}