<?php
/**
 * Created by PhpStorm.
 * User: monoit
 * Date: 9/2/17
 * Time: 3:39 PM
 */

namespace controller;
use core\Bootstrap;


class Controller
{
    protected $bootstrap;
    protected $test;
    function __construct()
    {
        $this->test = 'Hello';
        $bootstrap_class = new Bootstrap();
        $this->bootstrap = $bootstrap_class;
    }
}