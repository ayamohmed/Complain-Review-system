<?php
include('connection.php');
$q = "";

If (!isset($_SESSION) )
{
session_start();
}
if(isset($_SESSION['userid'])){
    $u=$_SESSION['userid'];
}
if(isset($_POST['rev'])){
    $r=mysqli_real_escape_string($con,$_POST["review"]);
    $Appname=mysqli_real_escape_string($con,$_POST["Application"]);

    $qq="INSERT INTO `review` VALUES (NULL,$u,'$r','$Appname')";
    mysqli_query($con,$qq);
}
$re="SELECT * FROM `review` JOIN `user` ON `review`.`user_id`=`user`.`user_id`  ORDER BY RAND() LIMIT 10";
$var1=mysqli_query($con,$re);

if(isset($_POST["search"])){
    $search=$_POST["search"];
    $q="SELECT * FROM `review` JOIN `user` ON `review`.`user_id`=`user`.`user_id` WHERE `company_name`LIKE '%{$search}%' ";
    $query=mysqli_query($con,$q);
}

if(isset($_GET["company"])){
    $company=$_GET["company"];
    $q="SELECT * FROM `review` JOIN `user` ON `review`.`user_id`=`user`.`user_id` WHERE `company_name`LIKE '%{$company}%' ";
    $query=mysqli_query($con,$q);
}



?>