<?php

namespace Illuminate\Support\Facades;

/**
<<<<<<< HEAD
 * @method static string getName()
 * @method static string getId()
 * @method static void setId(string $id)
 * @method static bool start()
 * @method static bool save()
 * @method static array all()
 * @method static bool exists(string|array $key)
 * @method static bool has(string|array $key)
 * @method static mixed get(string $key, $default = null)
 * @method static mixed pull(string $key, $default = null)
 * @method static void put(string|array $key, $value = null)
 * @method static string token()
 * @method static mixed remove(string $key)
 * @method static void forget(string|array $keys)
 * @method static void flush()
 * @method static bool migrate(bool $destroy = false)
 * @method static bool isStarted()
 * @method static string|null previousUrl()
 * @method static void setPreviousUrl(string $url)
 * @method static \SessionHandlerInterface getHandler()
 * @method static bool handlerNeedsRequest()
 * @method static void setRequestOnHandler(\Illuminate\Http\Request $request)
 * @method static void push(string $key, mixed $value)
=======
 * @method static \SessionHandlerInterface getHandler()
 * @method static array all()
 * @method static bool exists(string|array $key)
 * @method static bool handlerNeedsRequest()
 * @method static bool has(string|array $key)
 * @method static bool isStarted()
 * @method static bool migrate(bool $destroy = false)
 * @method static bool save()
 * @method static bool start()
 * @method static mixed get(string $key, $default = null)
 * @method static mixed pull(string $key, $default = null)
 * @method static mixed remove(string $key)
 * @method static string getId()
 * @method static string getName()
 * @method static string token()
 * @method static string|null previousUrl()
 * @method static void flush()
 * @method static void forget(string|array $keys)
 * @method static void push(string $key, mixed $value)
 * @method static void put(string|array $key, $value = null)
 * @method static void setId(string $id)
 * @method static void setPreviousUrl(string $url)
 * @method static void setRequestOnHandler(\Illuminate\Http\Request $request)
>>>>>>> a374cc3b592256c10dd67c86b205180b6a28a17a
 *
 * @see \Illuminate\Session\SessionManager
 * @see \Illuminate\Session\Store
 */
class Session extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'session';
    }
}
