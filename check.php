<?php
include ('connection.php');

if (!isset ($_SESSION))
{
    session_start();
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


function sendMail($email,$reset_token) {
require('PHPMailer/PHPMailer.php');
require('PHPMailer/SMTP.php');
require('PHPMailer/Exception.php');
$mail = new PHPMailer(true);
try {
    //Server settings
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'rcyouratewecare@gmail.com';                     //SMTP username
    $mail->Password   = 'Ratecomplaint2023';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS

    //Recipients
    $mail->setFrom('rcyouratewecare@gmail.com', 'RC');
    $mail->addAddress($email);     //Add a recipient
    


    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Password reset link from RC';
    $mail->Body    = "We got a request from you to reset your password <b>
    Click to the link below </b>
    <a href='http://localhost/final/updatepassword.php?email=$email&reset_token=$reset_token'>Reset Password</a>";
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    return true;
} 
catch (Exception $e) {
    return false;
}


}

if(isset($_POST['check']))
{
    $query="SELECT *  FROM user WHERE email='$_POST[email]'";
    $result=mysqli_query($con,$query);
    if($result) 
    {
if(mysqli_num_rows($result)==1)
{
$reset_token=bin2hex(random_bytes(16));
date_default_timezone_set('Africa/cairo');
$date=date("Y-m-d");
$query="UPDATE user SET resettoken='$reset_token',resettokenexpired='$date' WHERE email='$_POST[email]'";
if(mysqli_query($con,$query) /*&& sendMail($_POST['email'],$reset_token)*/)
{
    echo
    "<script> 
    alert('Password reset link sent to your email');
    window.location.href='password.php';
    </script>
   ";
}else 
{
    echo
    "<script> 
    alert('Please try again later');
    window.location.href='checkmail.php';
    </script>
   ";
}
}
else{
  echo  "<script> 
    alert('Email not found');
    window.location.href='checkmail.php';
    </script>
   ";
}
    }
    else
    {
        echo
         "<script> 
         alert('cannot run query');
         window.location.href='checkmail.php';
         </script>
        ";
    }
}
?>