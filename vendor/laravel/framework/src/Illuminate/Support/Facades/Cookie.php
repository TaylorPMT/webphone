<?php

namespace Illuminate\Support\Facades;

/**
<<<<<<< HEAD
 * @method static array getQueuedCookies()
 * @method static unqueue($name)
 * @method static void queue(...$parameters)
=======
<<<<<<< HEAD
 * @method static void queue(...$parameters)
 * @method static unqueue($name)
 * @method static array getQueuedCookies()
=======
 * @method static array getQueuedCookies()
 * @method static unqueue($name)
 * @method static void queue(...$parameters)
>>>>>>> a374cc3b592256c10dd67c86b205180b6a28a17a
>>>>>>> 9699cae06a00ea46819366b49ff86b34206b891d
 *
 * @see \Illuminate\Cookie\CookieJar
 */
class Cookie extends Facade
{
    /**
     * Determine if a cookie exists on the request.
     *
     * @param  string  $key
     * @return bool
     */
    public static function has($key)
    {
        return ! is_null(static::$app['request']->cookie($key, null));
    }

    /**
     * Retrieve a cookie from the request.
     *
     * @param  string|null  $key
     * @param  mixed  $default
     * @return string|array|null
     */
    public static function get($key = null, $default = null)
    {
        return static::$app['request']->cookie($key, $default);
    }

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'cookie';
    }
}
