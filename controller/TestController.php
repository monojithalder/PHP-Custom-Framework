<?php
/**
 * Created by PhpStorm.
 * User: monoit
 * Date: 3/2/17
 * Time: 3:25 PM
 */

namespace controller;
use controller\Controller;
use core\Bootstrap;
use model\UserModel;

class TestController Extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
/*        $bootstrap = new Bootstrap();
        $bootstrap->loadView('test_view');*/
        //echo $this->test;
        $this->bootstrap->loadView('test_view',array('data' => 'Hii! Welcome to PHP based OOPS training'));
        $user_model = new UserModel();
        $result = $user_model->get();

    }
}