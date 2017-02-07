<?php
    //phpinfo();
foreach (glob("core/*.php") as $filename)
{
    require($filename);
}
foreach (glob("controller/*.php") as $filename)
{
    require($filename);
}
foreach (glob("model/*.php") as $filename)
{
    require($filename);
}
//require_once('core');
use core\Database;
use core\Bootstrap;
use core\Routes;
$con = new Database();
$route_data = array(
    'REQUEST_URI' => $_SERVER['REQUEST_URI'],
    'REQUEST_METHOD' => $_SERVER['REQUEST_METHOD'],
);
$route = new Routes($route_data);
return $route->routePath();
//$bootstrap = new Bootstrap();
//$bootstrap->loadView('welcome');
?>