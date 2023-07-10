<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}
include 'config.php';
?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/ico" href="logo.jpg"/>
    <title>Products || Book Shelf</title>
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
          <li class='active'><a href="products.php">Books</a></li>
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
        <?php
          $result = $mysqli->query('SELECT DISTINCT genre,im FROM classics ');
          if($result === FALSE){
            die(mysql_error());
          }

          echo '<p><h2>GENRES</h2></p>';
          if($result){

            while($obj = $result->fetch_object()) {

             
              echo '<center>';
              echo'<a href="'.$obj->genre.'.php">';
              echo '<b><h4>'.$obj->genre.'</h4><b>';
              echo '<img src="'.$obj->im.'" style="border: 3px solid black;"><br><br><br></a>';
               echo '</center>';
              
            }

          }

   
          echo '</div>';
          echo '</div>';
         
          ?>

        


  </body>
</html>
