<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit13c5d7c879fb943dc0e62200126c5f6b
{
    public static $classMap = array (
        'Topic' => __DIR__ . '/../..' . '/app/models/Topic.php',
        'User' => __DIR__ . '/../..' . '/app/models/User.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit13c5d7c879fb943dc0e62200126c5f6b::$classMap;

        }, null, ClassLoader::class);
    }
}
