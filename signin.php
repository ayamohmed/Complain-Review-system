<?php
include ('connection.php');
if (!isset($_SESSION)){
    session_start();
}

if (isset($_POST['login'])) {

    $username=mysqli_real_escape_string($con,$_POST['username']);
    $pass=mysqli_real_escape_string($con,$_POST['conpass']);

$q="SELECT * FROM `user` WHERE `username`='$username'  AND `password`='$pass'";
$res=mysqli_query($con,$q);

if(mysqli_num_rows($res)==1){
    $var1=mysqli_fetch_assoc($res);
    $_SESSION['userid']=$var1['user_id'];
    $_SESSION['status']=$var1['status'];
    echo 
   "<script> 
    alert('Welcome back');
    window.location.href='profile.php';
    </script>
   ";
}
else{
    echo
    "<script> 
    alert('Wrong username or password');
    window.location.href='login.php';
    </script>
   ";
 
}
}
?>