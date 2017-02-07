<?php
/**
 * Created by PhpStorm.
 * User: monoit
 * Date: 7/2/17
 * Time: 8:05 PM
 */

namespace model;
use model\Model;

class UserModel Extends Model
{
    protected $table ='users';
    function __construct()
    {
        parent::__construct($this->table);
    }
}