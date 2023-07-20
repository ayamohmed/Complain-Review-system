<?php
include('connection.php');
if (!isset ($_SESSION))
{
    session_start();
}

if(isset($_POST["search"])){
    $search=$_POST["search"];
    $q="SELECT * FROM `review` WHERE `company_name`LIKE '%{$search}%' ";
    $query=mysqli_query($con,$q);
    while($results=mysqli_fetch_assoc($query)){
        echo $results['company_name'];
    } 
}
    else {
        echo "Not Found";
    }


?>