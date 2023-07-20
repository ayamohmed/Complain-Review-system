<?php error_reporting (E_ALL ^ E_NOTICE); ?>
<?php

include("connection.php");



If (!isset ($_SESSION['userid']))
{
session_start();

$u =$_SESSION['userid'];

$query = "SELECT `user`.`username` AS `username`,`user`.`password`, `user`.`email` AS `email` , `user`.`Address` AS `address`, `user`.`phone` AS `phone`, `elcpoint`.`no_of_point` AS `points` FROM `user`  LEFT JOIN `elcpoint` ON `user`.`user_id` = `elcpoint`.`user_id` WHERE `user`.`user_id`='$u'";
$select = mysqli_query($con, $query);

if (!$select) {
    echo 'Query failed: ' . mysqli_error($con);
} else {
    
    while ($row = mysqli_fetch_assoc($select)) {
        $username = $row['username'];
        $email = $row['email'];
        $address = $row['address'];
        $phoneNumber = $row['phone'];
        $password = $row['password'];
        $points=$row['points'];
        
       
    }
}
if(isset($_POST['sav'])) {
    $editname=mysqli_real_escape_string($con,$_POST['nusername']);
    $editemail=mysqli_real_escape_string($con,$_POST['nmail']);
    $editaddress=mysqli_real_escape_string($con,$_POST['nadd']);
    $editphone=mysqli_real_escape_string($con,$_POST['nphone']);
    $editpassword=mysqli_real_escape_string($con,$_POST['npass']);
    $query = "UPDATE `user` SET `username`='$editname',`email`='$editemail',`password`='$editpassword',`phone`=' $editphone',`Address`='$editaddress' WHERE `user_id`=$u";
    
    if(mysqli_query($con, $query)) {
        echo " your Update Done successfully";
    } else {
        echo "your Update faild " . mysqli_error($con);
    }
}

if(isset($_POST['review'])){
    
}
if(isset($_POST['complain'])){
    $user_id = $_POST['user_id']; 
    $query = "SELECT `comment` FROM complaints WHERE `user_id`=$user_id'";
    $result = mysqli_query($con, $query);
    if ($result) {
         $row = mysqli_fetch_assoc($result);
         $complaint = $row['comment'];
}
}
if (isset($_POST['log'])) {
    session_destroy();
    session_unset();
    header('location:login.php');   
  }
}
?>