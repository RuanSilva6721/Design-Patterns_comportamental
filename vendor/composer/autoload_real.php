<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitb16d6fcd0f0af1898e0cf1788dfaf820
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

        spl_autoload_register(array('ComposerAutoloaderInitb16d6fcd0f0af1898e0cf1788dfaf820', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitb16d6fcd0f0af1898e0cf1788dfaf820', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitb16d6fcd0f0af1898e0cf1788dfaf820::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
