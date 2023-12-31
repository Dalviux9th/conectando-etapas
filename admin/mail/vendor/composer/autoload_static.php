<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit631972ea7c2128677b2598cbf283a8ce
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit631972ea7c2128677b2598cbf283a8ce::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit631972ea7c2128677b2598cbf283a8ce::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit631972ea7c2128677b2598cbf283a8ce::$classMap;

        }, null, ClassLoader::class);
    }
}
