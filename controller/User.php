<?php
/**
 * Created by PhpStorm.
 * User: monoit
 * Date: 3/2/17
 * Time: 3:25 PM
 */

namespace controller;
use core\Bootstrap;
use core\Session;

class User
{
    public $test;
    function __construct()
    {
        $this->test = 'Hello';
    }

    //This method is used for show all users
    public function showUser() {
        Session::destroy();
        $bootstrap = new Bootstrap();
        $bootstrap->loadView('welcome');
    }

    public function home()
    {
        echo Session::get('id');
        //$bootstrap = new Bootstrap();
        //$bootstrap->loadView('home');
    }

    //This method is used for create new users
    public function createUser(array $user_array) {

    }

    //This method is used for delete user
    public function deleteUser($user_id) {

    }

    //This method is used for show user by id
    public function showUserById($user_id) {

    }
}