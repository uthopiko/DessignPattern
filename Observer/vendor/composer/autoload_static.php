<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit26ce459f5f62830c942285fda8f64e2b
{
    public static $prefixLengthsPsr4 = array (
        'o' => 
        array (
            'observer\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'observer\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit26ce459f5f62830c942285fda8f64e2b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit26ce459f5f62830c942285fda8f64e2b::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
