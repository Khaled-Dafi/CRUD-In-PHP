<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$database = 'loginapp';

$connection = mysqli_connect($host, $user, $pass, $database);

//for connections checks.

if (!$connection) {

    die("the connection to the database is faild");
}

?>