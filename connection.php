<?php

$_servername = "localhost";
$username = "root";
$password = "";
$dbname = "sign_up";

$conn = mysqli_connect($_servername,$username,$password,$dbname);

if($conn)
{
    //echo "connection OK";
} 
?>