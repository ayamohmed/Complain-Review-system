<?php

    include_once "../config/dbconnect.php";
   
    $complaint_id=$_POST['record'];
    //echo $order_id;
    $sql = "SELECT complaint_status from complaints2 where complaint_id='$complaint_id'"; 
    $result=$conn-> query($sql);
  //  echo $result;

    $row=$result-> fetch_assoc();
    
   // echo $row["pay_status"];
    
    if($row["complaint_status"]==0){
         $update = mysqli_query($conn,"UPDATE complaints2 SET complaint_status=1 where complaint_id='$complaint_id'");
    }
    else if($row["complaint_status"]==1){
         $update = mysqli_query($conn,"UPDATE complaints2 SET complaint_status=0 where complaint_id='$complaint_id'");
    }
    
        
 
    // if($update){
    //     echo"success";
    // }
    // else{
    //     echo"error";
    // }
    
?>