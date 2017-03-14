<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit068590fc35087cc670c3e1c3cf4dbd4f
{
    public static $classMap = array (
        'Pusher' => __DIR__ . '/..' . '/pusher/pusher-php-server/lib/Pusher.php',
        'PusherException' => __DIR__ . '/..' . '/pusher/pusher-php-server/lib/Pusher.php',
        'PusherInstance' => __DIR__ . '/..' . '/pusher/pusher-php-server/lib/Pusher.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit068590fc35087cc670c3e1c3cf4dbd4f::$classMap;

        }, null, ClassLoader::class);
    }
}