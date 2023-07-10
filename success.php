<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/ico" href="logo.jpg" />
    <title>BookShelf</title>
    <link rel="stylesheet" href="css/foundation.css" />
   
  </head>
  <body>

    <nav class="top-bar" data-topbar role="navigation">
      <ul class="title-area">
        <li class="name">
        <h1><a href="index.php"><img src="logo.jpg" width=10% height=10%>     BookShelf</a></h1>
        </li>
        <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
      </ul>

      <section class="top-bar-section">
     
        <ul class="right">
          <li><a href="about.php">About</a></li>
          <li><a href="products.php">Books</a></li>
          <li><a href="cart.php">View Cart</a></li>
          
          <?php

          if(isset($_SESSION['email'])){
            echo '<li><a href="orders.php">My Orders</a></li>';
            echo '<li><a href="account.php">My Account</a></li>';
            echo '<li><a href="logout.php">Log Out</a></li>';
          }
          else{
            echo '<li><a href="login.php">Log In</a></li>';
            echo '<li><a href="register.php">Register</a></li>';
          }
          ?>
        </ul>
      </section>
    </nav>




    <div class="row" style="margin-top:10px;">
      <div class="small-12">
        <center>
        <h3>Success. Your order has been placed. Congrats!</h3>
        <p>In case you purchased a product, then please check your spam in email for the receipt.</p>

</center>
       
      </div>
    </div>





    
  </body>
</html>
