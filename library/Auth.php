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

trait Auth
{
    protected $redirect_path = '/myaccount';
    function __construct()
    {

    }

    //This method is used for show login form
    public function showLogin()
    {
        $bootstrap = new Bootstrap();
        $bootstrap->loadView('login');
    }

    //This method is used for handel post login
    public function postLogin()
    {
        $data = $_POST;
        $this->doLogin($data);
    }

    //This method is used for do login
    public function doLogin(array $auth_data)
    {
        $user_model = new UserModel();
        $user_data  = $user_model->where(['email','=',$auth_data['email']])->where(['password','=',$auth_data['password']])->get();
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