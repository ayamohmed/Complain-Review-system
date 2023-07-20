<?php
include('connection.php');


    If (!isset ($_SESSION['userid']))
    {
    session_start();
    
    $u =$_SESSION['userid'];
}
if(isset($_POST['btn'])){
    $number=mysqli_real_escape_string($con,$_POST["number"]);
    $date=mysqli_real_escape_string($con,$_POST["date"]);
    $cvv=mysqli_real_escape_string($con,$_POST["cvv"]);
    $method=mysqli_real_escape_string($con,$_POST["rd"]);
    $c="INSERT INTO `card details` VALUES (NULL,'$u','$number','$date','$method')";
    $updating="UPDATE `user` SET `status`='premium' WHERE `user_id`=$u";
    $_SESSION['status'] = "premium";
    mysqli_query($con,$c);
    mysqli_query($con,$updating);
}

?>