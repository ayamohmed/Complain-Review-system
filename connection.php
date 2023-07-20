<?php
$servername="localhost";
$username="root";
$password="";
$dbname="rc";

$con= mysqli_connect($servername,$username,$password,$dbname);


if(!$con)
{
     die("Failed due to:" . $con->connect_error);
}
?>