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
use core\Bootstrap;

class Auth Extends Bootstrap
{
    protected $redirect_path = '/myaccount';
    function __construct()
    {

    }

    //This method is used for show login form
    public function showLogin()
    {
        $this->loadView('login');
    }

    //This method is used for do login
    public function doLogin(array $auth_data)
    {
        $user_model = new UserModel();
        $user_data  = $user_model->where(['email','=',$auth_data['email']])->get();
        if(!empty($user_data)) {
            Session::set(['user_id' => $user_data['id'],'email' => $user_data['email']]);
            return $user_data;
        }
        else {

        }
    }

    //This method is used for check login
    public function checkLogin()
    {
        $session_user_id = Session::get('user_id');
        if(!empty($session_user_id)) {
            return array('login' => TRUE);
        }
        else {
            return array('login' => FALSE);
        }
    }
}