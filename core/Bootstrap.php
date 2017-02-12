<?php
/**
 * Created by PhpStorm.
 * User: monoit
 * Date: 3/2/17
 * Time: 3:36 PM
 */

namespace core;


class Bootstrap
{
    public function loadView($view_name,array $data = array())
    {
        foreach ($data as $key => $value) {
            $$key = $value;
        }
        $bootstrap = $this;
        $file_path = $_SERVER['DOCUMENT_ROOT'].'/views/'.$view_name.'.php';
        if(file_exists($file_path)) {
            include $_SERVER['DOCUMENT_ROOT'] . '/views/' . $view_name . '.php';
        }
        else {
            echo "Can not found view";
        }
    }

    //This method is used for generate url for link
    public static function pathTo($path)
    {
        return $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['SERVER_ADDR'].'/'.$path;
    }

    //This method is used for generate path for asset
    public static function pathAsset($path)
    {
        return $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['SERVER_ADDR'].'/assets/'.$path;
    }
}