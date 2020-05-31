<?php

namespace Illuminate\Support\Facades;

/**
<<<<<<< HEAD
 * @method static bool has($key)
 * @method static mixed get($key, $default = null)
 * @method static array all()
 * @method static void set($key, $value = null)
 * @method static void prepend($key, $value)
 * @method static void push($key, $value)
=======
 * @method static array all()
 * @method static bool has($key)
 * @method static mixed get($key, $default = null)
 * @method static void prepend($key, $value)
 * @method static void push($key, $value)
 * @method static void set($key, $value = null)
>>>>>>> a374cc3b592256c10dd67c86b205180b6a28a17a
 *
 * @see \Illuminate\Config\Repository
 */
class Config extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'config';
    }
}
