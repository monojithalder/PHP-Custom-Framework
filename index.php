<?php
    //phpinfo();
foreach (glob("core/*.php") as $filename)
{
    require_once($filename);
}
//require_once('core');
use core\Database;
$con = new Database();
$a= 0;
?>