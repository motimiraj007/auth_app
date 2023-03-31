<?php

namespace App\Services;

use App\Exceptions\RouteNotFoundException;

class Route
{
    private static array $routes = [];

    public static function register(string $method, string $route, callable|array $action): void
    {
        static::$routes[$method][$route] = $action;
    }

    public static function get(string $route, callable|array $action)
    {
        self::register('get', $route, $action);
    }

    public static function post(string $route, callable|array $action)
    {
        self::register('post', $route, $action);
    }

    public static function resolve(array $server)
    {
        $route = explode('?', $server['requestURI'])[0];
        $action = static::$routes[strtolower($server['requestMethod'])][$route] ?? null;

        if (!$action):
            throw new RouteNotFoundException();
        endif;

        if (is_callable($action)):
            return call_user_func($action);
        endif;

        [$class, $method] = $action;
        if (class_exists($class)):
            $obj = new $class();
            if (method_exists($obj, $method)):
                return call_user_func_array([$obj, $method], []);
            endif;
        endif;

        throw new  RouteNotFoundException();
    }


    /**
     * @return array
     */
    public function getRoute(): array
    {
        return $this->route ?? [];
    }

}