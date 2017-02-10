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
    protected $query;
    private $table;
    function __construct($table)
    {
        $this->table = $table;
        $this->query = 'SELECT * FROM '.$this->table.' WHERE 1';
    }

    //This method is used for get data from a table
    public function get()
    {
        $mysqli = new Database();
        ///$sql = "SELECT * FROM ".$this->table;
        $result = $mysqli->connection->query($this->query);
        if(!empty($result)) {
            $row = $result->fetch_array();
            return $row;
        }
        return array();

    }

    //This method is used for implement where condition in sql query
    public function where(array $where_data) {
        if(is_string($where_data[2])) {
            $where_data[2] = "'".$where_data[2]."'";
        }
        $this->query .= " AND ".$where_data[0]." ".$where_data[1]." ".$where_data[2];
        return $this;
    }

    //this method is used for insert data into database
    public function create()
    {

    }

}