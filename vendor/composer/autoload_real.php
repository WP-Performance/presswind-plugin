<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit0e895c4cce9db96b0019f33db4b64344
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ($class === 'Composer\Autoload\ClassLoader') {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (self::$loader !== null) {
            return self::$loader;
        }

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(['ComposerAutoloaderInit0e895c4cce9db96b0019f33db4b64344', 'loadClassLoader'], true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(['ComposerAutoloaderInit0e895c4cce9db96b0019f33db4b64344', 'loadClassLoader']);

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit0e895c4cce9db96b0019f33db4b64344::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
