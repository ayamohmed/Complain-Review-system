<?php

    include_once "../config/dbconnect.php";
    
    $c_id=$_POST['record'];
    $query="DELETE FROM application2 where review_id='$c_id'";

    $data=mysqli_query($conn,$query);

    if($data){
        echo" application name Deleted";
    }
    else{
        echo"Not able to delete";
    }
    
?>