<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbc9afa6ba133f739533642af2e10cc8d
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Transbank\\Webpay\\' => 17,
            'Transbank\\Onepay\\Exceptions\\' => 28,
            'Transbank\\Onepay\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Transbank\\Webpay\\' => 
        array (
            0 => __DIR__ . '/..' . '/transbank/transbank-sdk/lib/webpay',
            1 => __DIR__ . '/..' . '/transbank/transbank-sdk/lib/webpay/soap',
        ),
        'Transbank\\Onepay\\Exceptions\\' => 
        array (
            0 => __DIR__ . '/..' . '/transbank/transbank-sdk/lib/onepay/exceptions',
        ),
        'Transbank\\Onepay\\' => 
        array (
            0 => __DIR__ . '/..' . '/transbank/transbank-sdk/lib/onepay',
            1 => __DIR__ . '/..' . '/transbank/transbank-sdk/lib/onepay/utils',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbc9afa6ba133f739533642af2e10cc8d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbc9afa6ba133f739533642af2e10cc8d::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
