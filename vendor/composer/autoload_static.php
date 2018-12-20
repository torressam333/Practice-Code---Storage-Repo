<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit030852a12fef89fdf1f10a3402d97c54
{
    public static $classMap = array (
        'App\\Controllers\\PagesController' => __DIR__ . '/../..' . '/app/controllers/PagesController.php',
        'App\\Controllers\\UsersController' => __DIR__ . '/../..' . '/app/controllers/UsersController.php',
        'App\\Core\\App' => __DIR__ . '/../..' . '/core/App.php',
        'App\\Core\\Request' => __DIR__ . '/../..' . '/core/Request.php',
        'App\\Core\\Router' => __DIR__ . '/../..' . '/core/Router.php',
        'App\\Models\\Project' => __DIR__ . '/../..' . '/app/models/project.php',
        'ComposerAutoloaderInit030852a12fef89fdf1f10a3402d97c54' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInit030852a12fef89fdf1f10a3402d97c54' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'QueryBuilder' => __DIR__ . '/../..' . '/core/database/QueryBuilder.php',
        'connection' => __DIR__ . '/../..' . '/core/database/connection.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit030852a12fef89fdf1f10a3402d97c54::$classMap;

        }, null, ClassLoader::class);
    }
}
