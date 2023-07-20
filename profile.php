<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>profile</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" type="text/css" href="profile.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
       
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500&family=Roboto:wght@300&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Castoro+Titling&family=Raleway:wght@100&display=swap" rel="stylesheet">

  
  
</head>
<body>
  <?php
  include ('prof.php');
  if(isset($_SESSION['userid'])){
    $u=$_SESSION['userid'];
}else {
  header("location:index.php");
}
  ?>
  <header>
  <div class="container" id="blur">
      <nav>
        <P class="logo" >R<span class="c">C</span></P>
        <div class="navs">
          <ul>
              <li> <a href="index.php"> Home</a> </li>
              <li> <a href="rev2.php"> Review</a> </li>
              <li> <a href="comp.php"> Complaint</a> </li>
              <li><a href="clothes.html"> Comparison </a></li>
              <li> <a href="contactus.html"> Contact Us</a> </li>
              <li> <a href="login.php">Log In</a> </li>
              <li> <form method="post" > <button type="submit" name="log" style="background:transparent; border:none;"><span class="material-icons-outlined" > logout </span></button></form> </li>
          </ul>
        </div>
      </nav>
      <img src="./assets/images/account.png" width="170px" height="170px" >
      <div class="triangle">
          <h2> USER NAME:<span style="fo">  <?php echo $username?> </span> </h2>  <br>
          <div class="data">
             <ul>
               <li>      <p> Points:  </p> <span><?php echo $points?></span> </li>
               <li> <p> Email: </p> <span ><?php echo $email?> </span>  </li>
               <li> <p>Address:  </p> <span><?php echo $address?> </span> </li>
                <li><p> Phone Number:<span><?php echo $phoneNumber?></span> </li>
           </ul>
          </div>
          <input  class="but" type="submit" name="edit" value="Edit" onclick="toggle3()" > 

      </div>
      <div class="right" >
        <div class="R">
          <p >YOUR REVIEWS</p>
        </div>
<div class="stars1" >
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
</div>
        <button  class="btn_rev" type="button" name="review" onclick="toggle1()" > show </button>
         <hr class="horizontal-tap1">    <hr class="horizontal-tap2">
         <hr class="horizontal-tap3">    
        <div class="C">
          <p >YOUR COMPLAINTS</p>
        </div>
<div class="stars2" >
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          </div>

          <button class="btn_com" type="button" name="complain" onclick="toggle2()" >show</button>
        </div>
     </div>   

     <div class="popup" id="popup">
        <h1>Your Reviews </h1>
        <?php
    
    $query = "SELECT  `comment` FROM `review` WHERE `user_id`=$u";
    $result = mysqli_query($con, $query);
   foreach ($result as $value ){

   
?>
        <img id="img1" src="./assets/images/icons8.jpg" width="50px height50px">
        <div class="rev1">
            <p><?php echo $value['comment'] ?> </p>
        </div>
   <?php
   }
   ?>
        
        
        
     <button class="close1" type="button" onclick="toggle1()"> &times;</button>
    </div>
    <div class="popup2" id="popup2">
      <h1>Your Complaints</h1>
      <?php
    $query = "SELECT  `comment` FROM `complaints` WHERE `user_id`=$u";
    $result = mysqli_query($con, $query);
   foreach ($result as $value ){
?>
      <img id="img2" src="./assets/images/icons9.jpg" width="50px height50px">
      <div class="rev2">
      <p><?php echo $value['comment'] ?> </p>
      </div>
<?php } ?>
     <button class="close1" type="button" onclick="toggle2()"> &times;</button>
    </div>
    
    <form class="popup3" id="popup3" method="post">
      
      <ul>
      <li><label class="nusername" for="nusername"> New User Name </label>   <input type="text" id="nusername" name="nusername" method="post" placeholder="enter your new name" value="<?php echo $username ?>"> <input type="submit" class="but1" value="Save" name="sav">  </li>
      <li> <label class="npass" for="nmail"> New password </label>  <input type="password" id="npass" name="npass" method="post"  placeholder="enter your new password" value="<?php echo $password ?>">  <input type="submit" class="but2" value="Save" name="sav"> </li>
      <li> <label class="nmail" for="nmail"> New Email </label>  <input type="email" id="nmail" name="nmail" method="post"  placeholder="enter your new email" value="<?php echo $email ?>">  <input type="submit" class="but2" value="Save" name="sav"> </li>
      <li><label class="nadd" for="nadd"> New Address </label>  <input type="text" id="nadd" name="nadd" method="post" placeholder="enter your new Address" value="<?php echo $address ?>">   <input type="submit" class="but3" value="Save" name="sav">  </li>
      <li><label class="nphone" for="nphone"> New Phone Number </label>  <input type="tel" id="nphone" name="nphone" method="post"  placeholder="enter your new phone number" value="<?php echo $phoneNumber ?>">   <input type="submit" class="but4" value="Save" name="sav"> </li>
    </ul>

    <button  type="button"  onclick=" toggle3()"  >&times;</button>
</form>
<footer>
      <div class="footer">
        
        <div class="col1">
          <h3>Services :</h3>
         <a href="rev2/php"> <h4>Review</h4></a>
         <a href="comp.php">  <h4>Complaint</h4></a>
         <a href="clothes.html">  <h4>Comparison</h4></a>
          
          <h4>Electronic Points</h4>
        </div>

        <div class="col2"> 
          <h3>Contact info :</h3>
        <a href="mailto:rcyoucarewerate@gmail.com">  <h4>rcyoucarewerate@gmail.com</h4></a>
          <a href="tel:+02 01128872210"><h4>tel :+02 01128872210</h4></a>
          
        </div>

        <div class="col3">
          <h3>Social :</h3>
          <a href="https://www.facebook.com/profile.php?id=100091461590240&mibextid=ZbWKwL"><h4>Facebook</h4></a>
          <a href="https://instagram.com/ratecomplaint?igshid=ZDdkNTZiNTM="> <h4>Instagram</h4></a>
          <a href="https://twitter.com/RC4639544536748?t=mGxuJVHTmzi0Q5SjBZXDhQ&s=09"><h4>Twitter</h4></a>
          <a href="https://www.linkedin.com/in/rate-care-766762269"><h4>Linkedin</h4></a>
        </div>
        <div class="col4">
          <h3>MY Account :</h3>
         <a href="sign.php"> <h4>SignIn/Register</h4></a>
          <a href="profile.php"><h4>My Reviews</h4></a>
        <a href="profile.php"><h4>My Complaints</h4></a>
         <a href="profile.php"> <h4>My points</h4></a>
        </div>
      </div>
      <hr class="hr2" />
      <h4 class="copy">&copy;Created by BIS 2023 Seniors Team</h4>
    </footer>


<script type="text/javascript">

function toggle1(){
  var blur = document.getElementById('blur');
  blur.classList.toggle('active');

  var popup = document.getElementById('popup');
  popup.classList.toggle('active');
}
function toggle2(){
  var blur = document.getElementById('blur');
  blur.classList.toggle('active');

  var popup2 = document.getElementById('popup2');
  popup2.classList.toggle('active');
}
function toggle3(){
  var blur = document.getElementById('blur');
  blur.classList.toggle('active');

  var popup3 = document.getElementById('popup3');
  popup3.classList.toggle('active');
}
  
</script>
</body>
</html>
