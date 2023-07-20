
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>login</title>
  <link rel="stylesheet" type="text/css" href="login.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500&family=Roboto:wght@300&display=swap" rel="stylesheet">

</head>
<body>
  <?php
  include ('signin.php');
  ?>

  <ul>
      <li><hr class="hr1"></li>
      <li> <p>YOU <span class="rate"> RATE</span> ,WE <span class="care">CARE</aspan></p></li> 
  </ul>
  
  <img class="loginimg" src="./assets/images/loginimg.jpg"   width="500px" height="500px"  >
      
    <div class="triangle"> 
      <h1>Login</h1>
  </div>


<form class="login" name="login"  method="post"  >



    <div class="stars" >
    <i class="fas fa-star"></i>
    <i class="fas fa-star"></i>
    <i class="fas fa-star"></i>
    <i class="fas fa-star"></i>
    <i class="fas fa-star"></i>
    </div>
    

    <div class="txt">
        <label for="txt">Username</label> <br>
        <input  id="txt"  type="text" name="username"  placeholder="Enter you username"  required >
    </div>


  
    <div class="password">
      <label for="pass">Password</label> <br>
      <input id="pass" type="password"  name="conpass"  placeholder=" Enter your password"  minlength="8" required>
  </div>

  <div class="submit"> <br>
      <input type="submit" value="Login"  name="login" >

  </div>
  <div >
  <a class="pass" href="checkmail.php">Forget your password?</a>
  
  
<a class="acc" href="sign.php">Create an Account</a> 
  
  </div>
</form>
<footer>
      <div class="footer">
        
        <div class="col1">
          <h3>Services :</h3>
         <a href="rev2.php"> <h4>Review</h4></a>
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
    
</body>
  </html>