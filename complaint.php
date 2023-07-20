<?php
include('connection.php');


If (!isset($_SESSION) )
{
session_start();
}
if(isset($_SESSION['userid'])){
  $u=$_SESSION['userid'];
}
if(isset($_POST['btn']))
{
  $complain=mysqli_real_escape_string($con,$_POST["complain"]);
  $app=mysqli_real_escape_string($con,$_POST["Application"]);
  $date=mysqli_real_escape_string($con,$_POST["date"]);
  $sn=mysqli_real_escape_string($con,$_POST["num"]);
  $type=mysqli_real_escape_string($con,$_POST["type"]);
  $q="INSERT INTO `complaints` VALUES (NULL,$u,'$complain','$app','$date','$sn','$type') ";
  mysqli_query($con,$q);
  
  echo "Your Complaint Is Submitted , Wait for The Verivication";
   
}

//if(isset($_POST['veri'])){
//$sql_select = "SELECT * FROM elcpoint ";
//$result = mysqli_query($con, $sql_select);
//$row = mysqli_fetch_assoc($result);

// Update the record
//$numberofpoint <100;
//$sql_update = "UPDATE elcpoint SET numberofpoint='$numberofpoint' ";
//if (mysqli_query($con, $sql_update)) {
  //  echo "Record updated successfully";
//} else {
    //echo "Error updating record: " . mysqli_error($con);
//}

//mysqli_close($con);

//}
?>