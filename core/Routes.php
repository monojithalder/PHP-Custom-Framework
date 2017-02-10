<?php
/**
 * Created by PhpStorm.
 * User: monoit
 * Date: 3/2/17
 * Time: 3:30 PM
 */

namespace core;

class Routes
{
    private $request;
    function __construct(array $request_data)
    {
        $this->request = array();
        $this->request = $request_data;
    }

    public function routePath()
    {
        include $_SERVER['DOCUMENT_ROOT'].'/routes.php';
        //require $_SERVER['DOCUMENT_ROOT'].'/controller/'.$routes[$_SERVER['REQUEST_URI']]['controller'].'php';
        $uri_explode = explode('/',$_SERVER['REQUEST_URI']);
        $uri = '/';
        if(count($uri_explode) > 1) {
            $uri .= $uri_explode[count($uri_explode) - 1];
        }

        if(isset($routes[$uri])) {
            $function_name = $routes[$uri]['function'];
            $class = 'controller\\' . $routes[$uri]['controller'];
            $controller_obj = new $class;
            return $controller_obj->$function_name();
        }
        else {
            echo "Route not found";
        }

    }
}