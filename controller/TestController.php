<?php
/**
 * Created by PhpStorm.
 * User: monoit
 * Date: 3/2/17
 * Time: 3:25 PM
 */

namespace controller;
use core\Bootstrap;
use model\UserModel;

class TestController
{
    public $test;
    function __construct()
    {

    }

    public function index()
    {
/*        $bootstrap = new Bootstrap();
        $bootstrap->loadView('test_view');*/
        $user_model = new UserModel();
        $result = $user_model->get();

    }
}