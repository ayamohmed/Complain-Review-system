<?php
include ('connection.php');

if (!isset ($_SESSION))
{
    session_start();
}
if (isset ($_POST['submit']))
{
$uname=mysqli_real_escape_string ($con,$_POST['username']);
$mail=mysqli_real_escape_string ($con,$_POST['email']);
$password=mysqli_real_escape_string ($con,$_POST['pass']);
$cp=mysqli_real_escape_string ($con,$_POST['conpass']);
$ph=mysqli_real_escape_string ($con,$_POST['phone']);
$cit=mysqli_real_escape_string ($con,$_POST['city']);
$add=mysqli_real_escape_string ($con,$_POST['Address']);
$birthdate=mysqli_real_escape_string ($con,$_POST['date']);
$gen=mysqli_real_escape_string ($con,$_POST['type']);



if($password != $cp) 
{
    echo "Password doesn't match";
}
    else {
         $check=mysqli_num_rows(mysqli_query($con,"SELECT `username` FROM `user` WHERE `username`='$uname'"));
        if($check==0)
        {
            $query=" INSERT INTO user VALUES (NULL,1,'$uname','$mail','$password','$birthdate','$ph','$cit','$gen','$add',NULL,NULL,'normal')";
    $test=mysqli_query($con,$query);
    if($test){
        echo
        "<script> 
        alert('Welcome to RC');
        window.location.href='login.php';
        </script>
       ";
       
    }
        }else {
            echo "Username already exists";
        }
       
        
        
     }
}







?>