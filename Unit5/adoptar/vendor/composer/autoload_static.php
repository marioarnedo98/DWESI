<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0867081260ff5312d01ca32ba0dbf158
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '72579e7bd17821bb1321b87411366eae' => __DIR__ . '/..' . '/illuminate/support/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Component\\Translation\\' => 30,
        ),
        'P' => 
        array (
            'Psr\\SimpleCache\\' => 16,
            'Psr\\Container\\' => 14,
        ),
        'I' => 
        array (
            'Illuminate\\Support\\' => 19,
            'Illuminate\\Database\\' => 20,
            'Illuminate\\Contracts\\' => 21,
            'Illuminate\\Container\\' => 21,
        ),
        'D' => 
        array (
            'Doctrine\\Common\\Inflector\\' => 26,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Component\\Translation\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/translation',
        ),
        'Psr\\SimpleCache\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/simple-cache/src',
        ),
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'Illuminate\\Support\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/support',
        ),
        'Illuminate\\Database\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/database',
        ),
        'Illuminate\\Contracts\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/contracts',
        ),
        'Illuminate\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/container',
        ),
        'Doctrine\\Common\\Inflector\\' => 
        array (
            0 => __DIR__ . '/..' . '/doctrine/inflector/lib/Doctrine/Common/Inflector',
        ),
    );

    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/..' . '/nesbot/carbon/src',
    );

    public static $classMap = array (
        'App' => __DIR__ . '/../..' . '/app/core/App.php',
        'Controller' => __DIR__ . '/../..' . '/app/core/Controller.php',
        'Dogs' => __DIR__ . '/../..' . '/app/models/Dogs.php',
        'DogsController' => __DIR__ . '/../..' . '/app/controllers/DogsController.php',
        'FPDF' => __DIR__ . '/..' . '/setasign/fpdf/fpdf.php',
        'Files' => __DIR__ . '/../..' . '/app/models/Files.php',
        'FormHelper' => __DIR__ . '/../..' . '/app/core/FormHelper.php',
        'Messages' => __DIR__ . '/../..' . '/app/core/Messages.php',
        'PDF' => __DIR__ . '/../..' . '/app/core/PDF.php',
        'Users' => __DIR__ . '/../..' . '/app/models/Users.php',
        'UsersController' => __DIR__ . '/../..' . '/app/controllers/UsersController.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0867081260ff5312d01ca32ba0dbf158::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0867081260ff5312d01ca32ba0dbf158::$prefixDirsPsr4;
            $loader->fallbackDirsPsr4 = ComposerStaticInit0867081260ff5312d01ca32ba0dbf158::$fallbackDirsPsr4;
            $loader->classMap = ComposerStaticInit0867081260ff5312d01ca32ba0dbf158::$classMap;

        }, null, ClassLoader::class);
    }
}
