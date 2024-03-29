<?php

require_once 'src/php/controllers/DefaultController.php';
require_once 'src/php/controllers/SecurityController.php';
require_once 'src/php/controllers/CoinflipController.php';
require_once 'src/php/controllers/ClaimController.php';
require_once 'src/php/controllers/RankingController.php';
require_once 'src/php/controllers/AdminController.php';

class Routing
{
    public static $routes;

    public static function get($url, $view)
    {
        self::$routes[$url] = $view;
    }

    public static function post($url, $view)
    {
        self::$routes[$url] = $view;
    }

    public static function run($url)
    {
        $action = explode("/", $url)[0];

        if (!array_key_exists($action, self::$routes)) {
            die("error 404");
        }

        $controller = self::$routes[$action];
        $object =  new $controller();
        $action = $action ?: 'index';
        $object->$action();
    }
}
