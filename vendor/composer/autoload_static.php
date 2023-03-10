<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf7e75d43e47a85bdf5235304b2b6aaf1
{
    public static $files = array (
        'a9ed0d27b5a698798a89181429f162c5' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/Common/customFunctions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'Z' => 
        array (
            'Zxing\\' => 6,
        ),
        'B' => 
        array (
            'Braintree\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Zxing\\' => 
        array (
            0 => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib',
        ),
        'Braintree\\' => 
        array (
            0 => __DIR__ . '/..' . '/braintree/braintree_php/lib/Braintree',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf7e75d43e47a85bdf5235304b2b6aaf1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf7e75d43e47a85bdf5235304b2b6aaf1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf7e75d43e47a85bdf5235304b2b6aaf1::$classMap;

        }, null, ClassLoader::class);
    }
}
