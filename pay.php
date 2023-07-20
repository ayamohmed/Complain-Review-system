<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="pay.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
      integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer" />
       <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500&family=Roboto:wght@300&display=swap" rel="stylesheet">

  </head>
  <body>
    <?php
    include ('payment.php');
    ?>
  
   <div class="all">
    <div class="side"> 
      <p>FOR THE </p>
<p> <span>PREMIUM  </span> </p>
<p>COMPLAINT. </p>
    </div>
  <div class="arrow"><i class="fas fa-share"></i></div>
    
    <div class="form">
      <button name="cancel" class="cancel" onclick="location.href='comp.php'"> CANCEL</button>
      <h2 class=""> PAYMENT FORM </h2>
      
      <form method="post">
        <h4 class="h4"> CARD NUMBER </h4>
        <input name="number" class="input " type="Number" placeholder="654245622552592" required><br>
        
        <h4 class="h4"> EXPIRATION DATE </h4> 
        <input name="date" class="input" type="date"  required><br>
        <h4 class="h4"> CVV CODE  </h4>
       <input name="cvv" class="input" type="CVV" placeholder="SECURE CODE" required><br>
       
        <div class="method">
          <input name="rd" type="radio" value="visa" checked ><img src="./assets/images/visa.png">
          <input name="rd" type="radio" value="mastercard"><img src="./assets/images/mastercard.png">
        <input name="rd"  type="radio" value="paypal"> <img src="./assets/images/paypal.png"> </div>
        
        <a href="comp.php"><button name="btn" type="submit" id="btn" name="btn  " onclick="alert('your card has been added')"> ADD CARD</button></a>
          
        </div>
        </div>

      </form>
    </div>
  
    <footer>
      <div class="footer">
        
        <div class="col1">
          <h3>Services :</h3>
         <a href="rev2.php"> <h4>Review</h4></a>
         <a href="comp.php">  <h4>Complaint</h4></a>
        <a href="clothes.html"> <h4>Comparison</h4></a>
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
