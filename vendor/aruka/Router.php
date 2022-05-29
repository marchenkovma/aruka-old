<?php

namespace aruka;

class Router
{
    protected static array $routes = [];
    protected static array $route = [];

    public static function add($regexp, $route = [])
    {
        self::$routes[$regexp] = $route;
    }

    public static function getRoutes(): array
    {
        return self::$routes;
    }

    public static function getRoute(): array
    {
        return self::$route;
    }   

    public static function dispatch($url)
    {
        if (self::matchRoute($url)) {
            echo 'OK!';
        } else  {
            echo 'NO!';
        }
    }

    public static function matchRoute($url): bool
    {
        foreach (self::$routes as $pattern => $route) {
            // #{$pattern}#i - case-independent
            if (preg_match("#{$pattern}#", $url, $matches)) {
                foreach ($matches as $k => $v) {
                    if (is_string($k)) {
                        $route [$k] = $v;
                    }
                }
                if (empty($route['action'])) {
                    $route['action'] = 'index';
                }
                if (!isset($route['admin_prefix'])) {
                    $route['admin_prefix'] = '';
                }
                else {
                    $route['admin_prefix'] = '\\';
                }
                debug($route);
                $route['controller'] = self::upperCamelCase($route['controller']);
                debug($route);
                return true;
            }
        }
        return false;
    }

    // new-product => NewProduct
    protected static function upperCamelCase($name): string
    {
        // new-product => new product
        //$name= str_replace('-', '', $name);
        // new product => New Product
        //$name = ucwords($name);
        // New prodcut => NewProduct
        //$name = str_replace(' ', '', $name);

        return str_replace(' ', '', ucwords(str_replace('-', '', $name)));
    }
    // PSR 4?
    // CamelCase - Class
    // new-product => NewProduct
    // camelCase - Method

}