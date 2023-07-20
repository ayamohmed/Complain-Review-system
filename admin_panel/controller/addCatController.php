<?php
    include_once "../config/dbconnect.php";
    
    if(isset($_POST['upload']))
    {
       
        $catname = $_POST['application_name'];
       
         $insert = mysqli_query($conn,"INSERT INTO application2
         (application_name) 
         VALUES ('$catname')");
 
         if(!$insert)
         {
             echo mysqli_error($conn);
             header("Location: ../index.php?application2=error");
         }
         else
         {
             echo "Records added successfully.";
             header("Location: ../index.php?application2=success");
         }
     
    }
        
?>