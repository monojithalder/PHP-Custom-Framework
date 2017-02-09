<?php
/**
 * Created by PhpStorm.
 * User: monoit
 * Date: 9/2/17
 * Time: 5:11 PM
 */

namespace library;
use core\Session;
use model\UserModel;

class Auth
{
    function __construct()
    {

    }

    //This method is used for show login form
    public function showLogin()
    {

    }

    //This method is used for do login
    public function doLogin(array $auth_data)
    {
        $user_model = new UserModel();
        $user_data  = $user_model->get();

    }
}