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
        $conn = mysqli_connect($servername,$username,$password,$dbname);
        if(!$conn)
        {
            die("connection failed".mysqli_connect_error());
        }
        $this->connection = $conn;
    }
}