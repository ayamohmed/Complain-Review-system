<?php
include('connection.php');
if (!isset ($_SESSION))
{
    session_start();
}

if(isset($_GET['email']) && isset($_GET['reset_token'])) {
    date_default_timezone_set('Africa/Cairo');
    $date=date("Y-m-d");
    $query="SELECT * FROM user WHERE email='$_GET[email]' AND resettoken='$_GET[reset_token]' AND resettokenexpired='$date' ";
$result=mysqli_query($con,$query);
if($result)
{
if(mysqli_num_rows($result)==1)
{
    echo 
    "<script> 
    alert('Its time to update your password');
    window.location.href='updatepassword.php';
    </script> ";
}
else 
{
    echo 
    "<script> 
    alert('Invalid or Expired link');
    window.location.href='check.php';
    </script> ";
}
}
else {
    echo 
   "<script> 
    alert('Server Down');
    window.location.href='updatepassword.php';
    </script> ";

}
if(isset($_POST['Save'])){
    $pass=password_hash($_POST['pass'],PASSWORD_BCRYPT);
    $update="UPDATE user SET password='$pass',resettoken=NULL,resettokenexpired=NULL WHERE 'email'='$_POST[email]'";
    if(mysqli_query($con,$update)){
        echo 
        "<script> 
         alert('Password updated successfully');
         window.location.href='login.php';
         </script> ";
     

    } else {
        echo 
        "<script> 
         alert('Server Down');
         window.location.href='updatepassword.php';
         </script> ";
     

    }
}
}

?>