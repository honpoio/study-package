<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf3a524f4ffd507cd4f322c13461dac28
{
    public static $prefixLengthsPsr4 = array (
        'y' => 
        array (
            'yamashirotest\\hogeyamatest\\' => 27,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'yamashirotest\\hogeyamatest\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf3a524f4ffd507cd4f322c13461dac28::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf3a524f4ffd507cd4f322c13461dac28::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
