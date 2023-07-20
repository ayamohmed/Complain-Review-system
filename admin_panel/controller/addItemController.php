<?php
    include_once "../config/dbconnect.php";
    
    if(isset($_POST['upload']))
    {
       
        $userName = $_POST['user_name'];
        $rev= $_POST['review'];
        $point = $_POST['points'];
        $app = $_POST['application_name'];
       
            
        $name = $_FILES['file']['name'];
        $temp = $_FILES['file']['tmp_name'];
    
        $location="./uploads/";
        $image=$location.$name;

        $target_dir="../uploads/";
        $finalImage=$target_dir.$name;

        move_uploaded_file($temp,$finalImage);

         $insert = mysqli_query($conn,"INSERT INTO reviews2
         (user_name,review_image,points,application_name) 
         VALUES ('$userName','$image','$point','$rev','$app')");
 
         if(!$insert)
         {
             echo mysqli_error($conn);
         }
         else
         {
             echo "Records added successfully.";
         }
     
    }
        
?>