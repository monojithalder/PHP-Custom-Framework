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
use core\Session;

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
        Session::set(array('id' => 1));
        //$this->bootstrap->loadView('test_view',array('data' => 'Hii! Welcome to PHP based OOPS training'));
        $user_model = new UserModel();
        $result = $user_model->where(['id','=',2])->get();
        //$result = $user_model->get();
        print_r($result);
        $this->bootstrap->loadView('welcome');

    }
}