<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8838f6bc2d57f6333897c484e24b4d13
{
    public static $classMap = array (
        'App' => __DIR__ . '/../..' . '/app/core/App.php',
        'BooksController' => __DIR__ . '/../..' . '/app/controllers/BooksController.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit8838f6bc2d57f6333897c484e24b4d13::$classMap;

        }, null, ClassLoader::class);
    }
}
