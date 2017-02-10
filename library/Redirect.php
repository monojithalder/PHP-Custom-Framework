<?php
/**
 * Created by PhpStorm.
 * User: monoit
 * Date: 10/2/17
 * Time: 9:38 PM
 */

namespace library;


class Redirect
{
    function __construct()
    {
        
    }
    
    //This method is used for redirect in path
    public function go($url)
    {
        header('Location: '.$url);
        exit();
    }

    public function with(array $data)
    {

    }

}