<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PSW', '');
define('DB_DATABASE', 'space_component');

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PSW, DB_DATABASE);

if(mysqli_connect_errno())
{
    die('A kapcsolat nem jött létre: ' .mysqli_connect_errno(). ', ' .mysqli_connect_error());
}


 