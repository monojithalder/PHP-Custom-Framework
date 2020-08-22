<?php
/**
 * Created by PhpStorm.
 * User: monoit
 * Date: 3/2/17
 * Time: 3:24 PM
 */

namespace core;
//require_once('../config/database.php');
//require_once('../config/database.php');
class Database
{
    public $connection;
    function __construct() {
        include $_SERVER['DOCUMENT_ROOT'].'/config/database.php';
        $servername = $config['connections']['mysql']['host'];
        $username = $config['connections']['mysql']['username'];
        $password = $config['connections']['mysql']['password'];
        $dbname = $config['connections']['mysql']['database'];
        ///echo $config['default'];
        $mysqli = new \mysqli($servername,$username,$password,$dbname);
        if (!$mysqli->connect_error) {
            //die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
            $this->connection = $mysqli;
        }
    }
}