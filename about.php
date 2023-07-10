<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();} for php 5.4 and above

if(session_id() == '' || !isset($_SESSION)){session_start();}


?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/ico" href="logo.jpg" />
    <title>About Us || Book Shelf</title>
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
          <li class="active"><a href="about.php">About</a></li>
          <li><a href="products.php">Books</a></li>
          <li><a href="cart.php">View Cart</a></li>
      
          <?php
    
          if(isset($_SESSION['email'])){
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




    <div class="row" style="margin-top:30px;">
      <div class="small-12">
        <p><b>Online Bookstore- To Quench the Bibliophile's Thirst<b></p>
        <p>For bibliophiles, a book is their universe from where they withdraw inspiration, motivation, empathise or become one with the characters of the story and experience the rare sort of an euphoria that even materialistic things cannot bring. Like good, old and loyal friends, books come to rescue each time you are put into trouble to offer the gems of wisdom locked in words. They are are also like time-machine that takes us to meet the legends of the past and their captivating history. Maybe that's why, there's no other better mentor than books; no bigger inspiration than books. Now, with online books store, buying books have become really easy with multitude of genres present at one place.</p>
        <p><b>Explore Online Books on BookShelf<b></p>
        <p>Curious minds and the quester spirit, finds home in the books. Technology might have replaced, ample of things; but don't worry, none of them have been able to replace the books. Just a mid-way of bringing convenience of technology and beauty of reading books, on one single stage, called the 'Online Bookstore'. On BookShelf, there is a wide collection of online books of Indian as well as foreign authors. Buy books online from our online shopping portal, as you get convenience of varied payment options & easy delivery of the books at your doorstep.</p>
        <p><b>BookShelf's Accessible and Friendly Library<b></p>
        <p>Convenience of our readers, is counted as a priority for BookShelf's online bookstore. We know, you opt to buy books online, because of the easy accessibility that it offers. To retain your trust and bond, we serve you with the assortment of online books – that matches your needs, requirements and budget. With varied offers and discounts, BookShelf's online shopping site comes with multiple payment options.  You might have visited to pick just one book, but with the wealthy collection of books we showcase; you can't resist buying a couple of more manuals for your 'me-time'!</p>      

        

        

      </div>
    </div>







   
  </body>
</html>
