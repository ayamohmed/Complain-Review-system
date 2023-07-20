<?php

    include_once "../config/dbconnect.php";
    
    $p_id=$_POST['record'];
    $query="DELETE FROM reviews2 where review_id='$p_id'";

    $data=mysqli_query($conn,$query);

    if($data){
        echo" review Deleted";
    }
    else{
        echo"Not able to delete";
    }
    
?>