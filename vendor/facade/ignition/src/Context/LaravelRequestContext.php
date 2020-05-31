<?php

namespace Facade\Ignition\Context;

use Facade\FlareClient\Context\RequestContext;
use Illuminate\Http\Request;

class LaravelRequestContext extends RequestContext
{
    /** @var \Illuminate\Http\Request */
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function getUser(): array
    {
<<<<<<< HEAD
=======
<<<<<<< HEAD
        $user = $this->request->user();

        if (! $user) {
=======
>>>>>>> 9699cae06a00ea46819366b49ff86b34206b891d
        try {
            $user = $this->request->user();
    
            if (! $user) {
                return [];
            }
        } catch (\Throwable $e) {
<<<<<<< HEAD
=======
>>>>>>> a374cc3b592256c10dd67c86b205180b6a28a17a
>>>>>>> 9699cae06a00ea46819366b49ff86b34206b891d
            return [];
        }

        try {
            if (method_exists($user, 'toFlare')) {
                return $user->toFlare();
            }

            if (method_exists($user, 'toArray')) {
                return $user->toArray();
            }
        } catch (\Throwable $e) {
            return [];
        }

        return [];
    }

    public function getRoute(): array
    {
        $route = $this->request->route();

        return [
            'route' => optional($route)->getName(),
            'routeParameters' => $this->getRouteParameters(),
            'controllerAction' => optional($route)->getActionName(),
            'middleware' => array_values(optional($route)->gatherMiddleware() ?? []),
        ];
    }

    protected function getRouteParameters(): array
    {
        try {
            return collect(optional($this->request->route())->parameters ?? [])->toArray();
        } catch (\Throwable $e) {
            return [];
        }
    }

    public function toArray(): array
    {
        $properties = parent::toArray();

        $properties['route'] = $this->getRoute();

        $properties['user'] = $this->getUser();

        return $properties;
    }
}
