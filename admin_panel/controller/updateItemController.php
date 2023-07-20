<?php
    include_once "../config/dbconnect.php";

    $rev_id=$_POST['review_id'];
    $u_name= $_POST['user_name'];
    $rev= $_POST['review'];
    $p_point= $_POST['points'];
    $app= $_POST['application_id'];

    if( isset($_FILES['newImage']) ){
        
        $location="./uploads/";
        $img = $_FILES['newImage']['name'];
        $tmp = $_FILES['newImage']['tmp_name'];
        $dir = '../uploads/';
        $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
        $valid_extensions = array('jpeg', 'jpg', 'png', 'gif','webp');
        $image =rand(1000,1000000).".".$ext;
        $final_image=$location. $image;
        if (in_array($ext, $valid_extensions)) {
            $path = UPLOAD_PATH . $image;
            move_uploaded_file($tmp, $dir.$image);
        }
    }else{
        $final_image=$_POST['existingImage'];
    }
    $updateItem = mysqli_query($conn,"UPDATE reviews2 SET 
        user_name='$u_name', 
        review='$rev', 
        points=$p_point,
        application_id=$app,
        product_image='$final_image' 
        WHERE review_id=$rev_id");


    if($updateItem)
    {
        echo "true";
    }
    // else
    // {
    //     echo mysqli_error($conn);
    // }
?>