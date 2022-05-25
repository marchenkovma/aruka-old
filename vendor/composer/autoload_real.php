<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit2a1b546b900a0d20d250b7b82ff56809
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInit2a1b546b900a0d20d250b7b82ff56809', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit2a1b546b900a0d20d250b7b82ff56809', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit2a1b546b900a0d20d250b7b82ff56809::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
