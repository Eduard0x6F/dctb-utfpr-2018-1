<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd23df6e1b1a60ff7dcc491743e10701f
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
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd23df6e1b1a60ff7dcc491743e10701f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd23df6e1b1a60ff7dcc491743e10701f::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}