<?php
/**
 * Created by PhpStorm.
 * User: monoit
 * Date: 7/2/17
 * Time: 7:25 PM
 */

namespace model;
use core\Database;

class Model
{
    private $table;
    function __construct($table)
    {
        $this->table = $table;
    }

    //This method is used for get data from a table
    public function get()
    {
        $conn = new Database();
        $sql = "SELECT * FROM ".$this->table;
        $result = mysqli_query($conn,$sql);
        $row = $result->fetch_array();
        return $row;

    }

    //this method is used for insert data into database
    public function create()
    {

    }

}