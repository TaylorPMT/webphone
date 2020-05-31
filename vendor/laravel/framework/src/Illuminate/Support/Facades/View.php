<?php

namespace Illuminate\Support\Facades;

/**
<<<<<<< HEAD
 * @method static bool exists(string $view)
 * @method static \Illuminate\Contracts\View\View file(string $path, array $data = [], array $mergeData = [])
 * @method static \Illuminate\Contracts\View\View make(string $view, array $data = [], array $mergeData = [])
 * @method static mixed share(array|string $key, $value = null)
 * @method static array composer(array|string $views, \Closure|string $callback)
 * @method static array creator(array|string $views, \Closure|string $callback)
 * @method static \Illuminate\Contracts\View\Factory addNamespace(string $namespace, string|array $hints)
 * @method static \Illuminate\Contracts\View\Factory replaceNamespace(string $namespace, string|array $hints)
=======
 * @method static \Illuminate\Contracts\View\Factory addNamespace(string $namespace, string|array $hints)
 * @method static \Illuminate\Contracts\View\Factory replaceNamespace(string $namespace, string|array $hints)
 * @method static \Illuminate\Contracts\View\View file(string $path, array $data = [], array $mergeData = [])
 * @method static \Illuminate\Contracts\View\View make(string $view, array $data = [], array $mergeData = [])
 * @method static array composer(array|string $views, \Closure|string $callback)
 * @method static array creator(array|string $views, \Closure|string $callback)
 * @method static bool exists(string $view)
 * @method static mixed share(array|string $key, $value = null)
>>>>>>> a374cc3b592256c10dd67c86b205180b6a28a17a
 *
 * @see \Illuminate\View\Factory
 */
class View extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'view';
    }
}
