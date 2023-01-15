<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb76ef3f58ce91cfa343ec29219c1e4aa
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitb76ef3f58ce91cfa343ec29219c1e4aa::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb76ef3f58ce91cfa343ec29219c1e4aa::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb76ef3f58ce91cfa343ec29219c1e4aa::$classMap;

        }, null, ClassLoader::class);
    }
}