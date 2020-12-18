<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcb9014014b710b85ee7f99f063b75e9a
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'SwooleStar\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'SwooleStar\\' => 
        array (
            0 => __DIR__ . '/..' . '/5ii5cn/swoolestar/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcb9014014b710b85ee7f99f063b75e9a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcb9014014b710b85ee7f99f063b75e9a::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
