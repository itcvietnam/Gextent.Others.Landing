<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit34c43d8d0b8d076f38a4aa25cd627991
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit34c43d8d0b8d076f38a4aa25cd627991::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit34c43d8d0b8d076f38a4aa25cd627991::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit34c43d8d0b8d076f38a4aa25cd627991::$classMap;

        }, null, ClassLoader::class);
    }
}
