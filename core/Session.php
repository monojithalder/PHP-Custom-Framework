<?php
/**
 * Created by PhpStorm.
 * User: monoit
 * Date: 3/2/17
 * Time: 3:36 PM
 */

namespace core;


class Session
{
    function __construct()
    {
        session_start();
    }

    //This method is used for set session variable
    public static function set(array $data)
    {
        foreach ($data as $key => $value) {
            $_SESSION[$key] = $value;
        }
    }

    //This method is used for get session value by session key
    public static function get($session_key)
    {
        return $_SESSION[$session_key];
    }

    //This method is used for delete session key
    public static function delete($session_key)
    {
        unset($_SESSION[$session_key]);
    }

    //This method is used destroy session
    public static function destroy()
    {
        session_destroy();
    }
}