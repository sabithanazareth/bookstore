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
    <link rel="icon" type="image/ico" href="logo.jpg" />
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
      <div class="row" style="margin-top:10px;">
      <div class="small-12">
        <?php
          $i=0;
          $product_id = array();
        $product_quantity = array();
          $result = $mysqli->query('SELECT * FROM classics where genre="mystery"');
          if($result === FALSE){
            die(mysql_error());
          }

          echo '<p><h2>MYSTERY</h2></p>';
          
          if($result){

            while($obj = $result->fetch_object()) {

              echo '<div class="large-4 columns">';
              echo '<p><b><h4>'.$obj->title.'</h4><b></p>';
              echo '<img src="'.$obj->image.'"/>';
              echo '<p><br><strong>Description</strong>: '.$obj->desc.'</p>';
              echo '<p><strong>Units Available</strong>: '.$obj->no_of_copies.'</p>';
              echo '<p><strong>Price (Per Unit)</strong>: '.$currency.$obj->price.'</p>';
        



              if($obj->no_of_copies > 0){
                echo '<p><a href="update-cart.php?action=add&id='.$obj->id.'"><input type="submit" value="Add To Cart" style="clear:both; background: #0078A0; border: none; color: #fff; font-size: 1em; padding: 10px;" /></a></p>';
              }
              else {
                echo 'Out Of Stock!';
              }
              echo '</div>';

              $i++;
            }

          }

          $_SESSION['product_id'] = $product_id;


          echo '</div>';
          echo '</div>';
         
          ?>

        





   
  </body>
</html>
