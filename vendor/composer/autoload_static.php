<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9f5453761532c0daa6a25ecf5397f999
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '72579e7bd17821bb1321b87411366eae' => __DIR__ . '/..' . '/illuminate/support/helpers.php',
        '320cde22f66dd4f5d3fd621d3e88b98f' => __DIR__ . '/..' . '/symfony/polyfill-ctype/bootstrap.php',
        '9f394da3192a168c4633675768d80428' => __DIR__ . '/..' . '/nwidart/laravel-modules/src/helpers.php',
        '377b22b161c09ed6e5152de788ca020a' => __DIR__ . '/..' . '/spatie/laravel-permission/src/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'h' => 
        array (
            'houdunwang\\Module\\Tests\\' => 24,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Polyfill\\Ctype\\' => 23,
            'Symfony\\Component\\Translation\\' => 30,
            'Symfony\\Component\\Process\\' => 26,
            'Symfony\\Component\\HttpKernel\\' => 29,
            'Symfony\\Component\\HttpFoundation\\' => 33,
            'Symfony\\Component\\Finder\\' => 25,
            'Symfony\\Component\\EventDispatcher\\' => 34,
            'Symfony\\Component\\Debug\\' => 24,
            'Symfony\\Component\\Console\\' => 26,
            'Spatie\\Permission\\' => 18,
        ),
        'P' => 
        array (
            'Psr\\SimpleCache\\' => 16,
            'Psr\\Log\\' => 8,
            'Psr\\Container\\' => 14,
        ),
        'N' => 
        array (
            'Nwidart\\Modules\\' => 16,
        ),
        'I' => 
        array (
            'Illuminate\\Support\\' => 19,
            'Illuminate\\Session\\' => 19,
            'Illuminate\\Queue\\' => 17,
            'Illuminate\\Http\\' => 16,
            'Illuminate\\Filesystem\\' => 22,
            'Illuminate\\Database\\' => 20,
            'Illuminate\\Contracts\\' => 21,
            'Illuminate\\Container\\' => 21,
            'Illuminate\\Console\\' => 19,
            'Illuminate\\Auth\\' => 16,
        ),
        'H' => 
        array (
            'Houdunwang\\Module\\' => 18,
        ),
        'D' => 
        array (
            'Doctrine\\Common\\Inflector\\' => 26,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'houdunwang\\Module\\Tests\\' => 
        array (
            0 => __DIR__ . '/../..' . '/tests',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Polyfill\\Ctype\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-ctype',
        ),
        'Symfony\\Component\\Translation\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/translation',
        ),
        'Symfony\\Component\\Process\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/process',
        ),
        'Symfony\\Component\\HttpKernel\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/http-kernel',
        ),
        'Symfony\\Component\\HttpFoundation\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/http-foundation',
        ),
        'Symfony\\Component\\Finder\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/finder',
        ),
        'Symfony\\Component\\EventDispatcher\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/event-dispatcher',
        ),
        'Symfony\\Component\\Debug\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/debug',
        ),
        'Symfony\\Component\\Console\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/console',
        ),
        'Spatie\\Permission\\' => 
        array (
            0 => __DIR__ . '/..' . '/spatie/laravel-permission/src',
        ),
        'Psr\\SimpleCache\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/simple-cache/src',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'Nwidart\\Modules\\' => 
        array (
            0 => __DIR__ . '/..' . '/nwidart/laravel-modules/src',
        ),
        'Illuminate\\Support\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/support',
        ),
        'Illuminate\\Session\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/session',
        ),
        'Illuminate\\Queue\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/queue',
        ),
        'Illuminate\\Http\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/http',
        ),
        'Illuminate\\Filesystem\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/filesystem',
        ),
        'Illuminate\\Database\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/database',
        ),
        'Illuminate\\Contracts\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/contracts',
        ),
        'Illuminate\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/container',
        ),
        'Illuminate\\Console\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/console',
        ),
        'Illuminate\\Auth\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/auth',
        ),
        'Houdunwang\\Module\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Doctrine\\Common\\Inflector\\' => 
        array (
            0 => __DIR__ . '/..' . '/doctrine/inflector/lib/Doctrine/Common/Inflector',
        ),
    );

    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/..' . '/nesbot/carbon/src',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9f5453761532c0daa6a25ecf5397f999::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9f5453761532c0daa6a25ecf5397f999::$prefixDirsPsr4;
            $loader->fallbackDirsPsr4 = ComposerStaticInit9f5453761532c0daa6a25ecf5397f999::$fallbackDirsPsr4;

        }, null, ClassLoader::class);
    }
}
