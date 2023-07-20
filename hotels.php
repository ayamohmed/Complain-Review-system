<!DOCTYPE html>
<html>
  <!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Document</title>
      <link rel="stylesheet" href="clothes.css" />
      <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer" />
      <link rel="preconnect" href="https://fonts.googleapis.com" />
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
      <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500&family=Roboto:wght@300&display=swap"
        rel="stylesheet" />

      <link rel="preconnect" href="https://fonts.googleapis.com" />
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
      <link
        href="https://fonts.googleapis.com/css2?family=Castoro+Titling&family=Raleway:wght@100&display=swap"
        rel="stylesheet" />
    </head>
    <?php
  include ('connection.php');
  session_start();
  if(isset($_SESSION['userid'])){
    $u=$_SESSION['userid'];
    $premium = $_SESSION['status'];
}
 

  ?>

    <body>
      <nav>
        <p class="logo"><span class="r">R</span>C</p>

        <div class="navs">
          <ul>
            <li><a href="index.php"> Home</a></li>
            <li><a href="rev2.php"> Review</a></li>
            <li><a href="comp.php"> Complaint</a></li>
            <li><a href="contactus.html"> Contact Us</a></li>
            <li><a href="login.php"> Log in</a></li>
            <li>
              <a href="profile.php"> <i class="fas fa-user-circle"></i></a>
            </li>
          </ul>
        </div>
      </nav>
      <div class="slogan">
        <p class="p">Take a look and make your desicion</p>
        <i
          class="fas fa-check-double fa-lg"
          style="
            color: #e6b106;
            animation-name: arrow;
            animation-duration: 1.5s;
            animation-iteration-count: infinite;
            animation-timing-function: ease-out;
          "></i>
      </div>
      <div class="sidebar">
        <ul class="navs">
          <li>
            <a
              href="onlineshop.html">
              <i class="fas fa-shopping-cart" style="color: #000000"></i>
              <p class="links_name">onlineshop</p>
            </a>
          </li>
          <li>
            <a
              href="grocries.html">
              <i class="fas fa-shopping-basket" style="color: #000000"></i>
              <p class="links_name">grocries</p>
            </a>
          </li>
          <li>
            <a
              href="food.html">
              <i class="fas fa-hamburger" style="color: #000000"></i>
              <p class="links_name">Food</p>
            </a>
          </li>
          <li>
            <a
              href="transport.html">
              <i class="fas fa-car-side" style="color: #000000"></i>
              <p class="links_name">transporation</p>
            </a>
          </li>
          <li>
            <a
              href="clothes.php">
              <i class="fas fa-tshirt" style="color: #000000"></i>
              <p class="links_name">clothes</p>
            </a>
          </li>
          <li>
            <a
              href="hotels.php"
              class="active">
              <i class="fas fa-hotel" style="color: #000000"></i>
              <p class="links_name">hotels</p>
            </a>
          </li>
          <li>
            <a
              href="meeting.html">
              <i class="fas fa-user" style="color: #000000"></i>
              <p class="links_name">meeting</p>
            </a>
          </li>
        </ul>
      </div>

      <div class="table">
        <table class="table_details">
          <thead>
            <tr>
              
                <th style="color: #000000; font-size: 20px; ">Comparison Criteria</th>
                <th> <img src="bookinglogo.png" style="height: 70px; width: 100px;  align-items: center;border-radius: 10px;"></th>
                <th> <img src="Wego-logo-4.png" style="height: 60px; width: 120px; align-items: center;border-radius: 10px;"></div></th>
                <th> <img src="hostelworldlogo.png" style="height: 90px; width: 120px; align-items: center;border-radius: 10px;"></div></th>
              </th>

            </tr>
          </thead>

          <tbody>
            <tr>
              <td><h2>Reliability</h2></td>
              <td>
                you can <span>rely on</span> it to have the <span>best </span>booking when it comes to
                <span>hotels</span> but not  <span>flights</span>
              </td>
              <td>
                you can <span>rely on</span> it specially with its many <span>features </span>which will
                make your life<span>  easier</span>
              </td>
              <td>
                you <span>cannot</span> rely on it speically with the <span>bad </span>customer service
                maybe if you need a <span>cheap</span> hostel
              </td>
            </tr>
            <tr>
              <td><h2>Prices</h2></td>
              <td>the <span>cheapest</span></td>
              <td>
                little <span> expensive </span>
              </td>
              <td>the <span>moderate</span></td>
            </tr>
            <?php if($premium == "premium"){ ?>
            <tr>
              <td><h2>Customer service</h2></td>
              <td>Moderate</td>
              <td>the best</td>
              <td>the worst</td>
            </tr>
            <tr>
              <td><h2>Functionalities and features</h2></td>
              <td>
               great <span>functionality</span> and have <span> additional </span>features
              </td>
              <td>
                great <span>functionality</span> and have <span> additional </span>features
              </td>
              <td>hostelworld provide <span>more</span> features <span>than</span> the other</td>
            </tr>
            <tr>
              
            </tr>
            <?php } else { ?>
            <tr>
              <td colspan="4"> TO SEE MORE Get your premium account from <a href="pay.php">HERE</a></td>
            </tr>  
            <?php } ?>
          </tbody>
        </table>
      </div>

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
</html>
