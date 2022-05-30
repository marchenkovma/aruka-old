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

    protected static function removeQueryString($url)
    {
        debug($url);
        if ($url) {
            $params = explode('&', $url, 2);
            debug($params);
            if (false === str_contains($params[0], '=')) {
                return rtrim($params[0], '/');
            }
        }
        return '';
    }

    public static function dispatch($url)
    {
        $url = self::removeQueryString($url);
        if (self::matchRoute($url)) {
            $controller = 'app\controllers\\' . self::$route['admin_prefix'] . self::$route['controller'] . 'Controller';
            if (class_exists($controller)) {
                $controllerObject = new $controller(self::$route);
                
                /** @var Controller $contrllerObject */
                $controllerObject->getModel();

                $action = self::lowerCamelCase(self::$route['action'] . 'Action');
                if (method_exists($controllerObject, $action)) {
                    $controllerObject->$action();

                    $controllerObject->getView();

                } else {
                    throw new \Exception ("Action {$controller}::{$action} not found", 404); 
                }
            } else {
                throw new \Exception ("Controller {$controller} not found", 404); 
            }
        } else  {
            throw new \Exception ("Page not found", 404);
        }
    }

    public static function matchRoute($url): bool
    {
        foreach (self::$routes as $pattern => $route) {
            // #{$pattern}#si - case-independent
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
                    $route['admin_prefix'] .= '\\';
                }
                $route['controller'] = self::upperCamelCase($route['controller']);
                self::$route = $route;
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

    // camelCase
    protected static function lowerCamelCase($name): string
    {
        return lcfirst(self::upperCamelCase($name));
    }
}