<?php
/**
 * Created by PhpStorm.
 * User: monoit
 * Date: 9/2/17
 * Time: 3:39 PM
 */

namespace controller;
use core\Bootstrap;
use library\Redirect;


class Controller
{
    protected $bootstrap;
    protected $test;
    protected $redirect;
    function __construct()
    {
        $this->test = 'Hello';
        $bootstrap_class = new Bootstrap();
        $this->bootstrap = $bootstrap_class;

        $redirect_library = new Redirect();
        $this->redirect = $redirect_library;
    }
}