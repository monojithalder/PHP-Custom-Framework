<?php
/**
 * Created by PhpStorm.
 * User: monoit
 * Date: 9/2/17
 * Time: 11:06 PM
 */

namespace controller;

use controller\Controller;
use library\Auth;

class AuthController Extends Controller
{
    use Auth;

    function __construct()
    {
    }

}