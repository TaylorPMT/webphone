<?php

namespace Illuminate\Support\Facades;

/**
<<<<<<< HEAD
=======
<<<<<<< HEAD
 * @method static string version()
=======
>>>>>>> 9699cae06a00ea46819366b49ff86b34206b891d
 * @method static \Illuminate\Contracts\Foundation\Application loadEnvironmentFrom(string $file)
 * @method static \Illuminate\Support\ServiceProvider register(\Illuminate\Support\ServiceProvider|string $provider, bool $force = false)
 * @method static \Illuminate\Support\ServiceProvider resolveProvider(string $provider)
 * @method static array getProviders(\Illuminate\Support\ServiceProvider|string $provider)
 * @method static bool configurationIsCached()
 * @method static bool hasBeenBootstrapped()
 * @method static bool isDownForMaintenance()
 * @method static bool routesAreCached()
 * @method static bool runningInConsole()
 * @method static bool runningUnitTests()
 * @method static bool shouldSkipMiddleware()
<<<<<<< HEAD
=======
>>>>>>> a374cc3b592256c10dd67c86b205180b6a28a17a
>>>>>>> 9699cae06a00ea46819366b49ff86b34206b891d
 * @method static string basePath()
 * @method static string bootstrapPath(string $path = '')
 * @method static string configPath(string $path = '')
 * @method static string databasePath(string $path = '')
<<<<<<< HEAD
=======
<<<<<<< HEAD
 * @method static string environmentPath()
 * @method static string resourcePath(string $path = '')
 * @method static string storagePath(string $path = '')
 * @method static string|bool environment(string|array ...$environments)
 * @method static bool runningInConsole()
 * @method static bool runningUnitTests()
 * @method static bool isDownForMaintenance()
 * @method static void registerConfiguredProviders()
 * @method static \Illuminate\Support\ServiceProvider register(\Illuminate\Support\ServiceProvider|string $provider, bool $force = false)
 * @method static void registerDeferredProvider(string $provider, string $service = null)
 * @method static \Illuminate\Support\ServiceProvider resolveProvider(string $provider)
 * @method static void boot()
 * @method static void booting(callable $callback)
 * @method static void booted(callable $callback)
 * @method static void bootstrapWith(array $bootstrappers)
 * @method static bool configurationIsCached()
>>>>>>> 9699cae06a00ea46819366b49ff86b34206b891d
 * @method static string detectEnvironment(callable $callback)
 * @method static string environmentFile()
 * @method static string environmentFilePath()
 * @method static string environmentPath()
 * @method static string getCachedConfigPath()
 * @method static string getCachedPackagesPath()
 * @method static string getCachedRoutesPath()
 * @method static string getCachedServicesPath()
 * @method static string getLocale()
 * @method static string getNamespace()
 * @method static string resourcePath(string $path = '')
 * @method static string storagePath(string $path = '')
 * @method static string version()
 * @method static string|bool environment(string|array ...$environments)
 * @method static void boot()
 * @method static void booted(callable $callback)
 * @method static void booting(callable $callback)
 * @method static void bootstrapWith(array $bootstrappers)
 * @method static void loadDeferredProviders()
 * @method static void registerConfiguredProviders()
 * @method static void registerDeferredProvider(string $provider, string $service = null)
 * @method static void setLocale(string $locale)
<<<<<<< HEAD
=======
 * @method static bool shouldSkipMiddleware()
=======
 * @method static string detectEnvironment(callable $callback)
 * @method static string environmentFile()
 * @method static string environmentFilePath()
 * @method static string environmentPath()
 * @method static string getCachedConfigPath()
 * @method static string getCachedPackagesPath()
 * @method static string getCachedRoutesPath()
 * @method static string getCachedServicesPath()
 * @method static string getLocale()
 * @method static string getNamespace()
 * @method static string resourcePath(string $path = '')
 * @method static string storagePath(string $path = '')
 * @method static string version()
 * @method static string|bool environment(string|array ...$environments)
 * @method static void boot()
 * @method static void booted(callable $callback)
 * @method static void booting(callable $callback)
 * @method static void bootstrapWith(array $bootstrappers)
 * @method static void loadDeferredProviders()
 * @method static void registerConfiguredProviders()
 * @method static void registerDeferredProvider(string $provider, string $service = null)
 * @method static void setLocale(string $locale)
>>>>>>> a374cc3b592256c10dd67c86b205180b6a28a17a
>>>>>>> 9699cae06a00ea46819366b49ff86b34206b891d
 * @method static void terminate()
 *
 * @see \Illuminate\Contracts\Foundation\Application
 */
class App extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'app';
    }
}
