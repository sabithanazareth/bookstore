<?php

include 'config.php';
if(session_id() == '' || !isset($_SESSION)){session_start();}

if(isset($_POST['sub']))
{
  $fname = $_POST["fname"];
$email = $_POST["email"];
$pwd = $_POST["pwd"];
  

if($mysqli->query("INSERT INTO `login` (fname, email, `pwd`) VALUES('$fname','$email', '$pwd')")){
	echo 'Data inserted';
  echo '<br/>';
}

header("location:login.php");
}
?>



<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/ico" href="logo.jpg" />
    <title>Register || BookShelf</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" type="text/css" href="style1.css">
    
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
            echo '<li class="active"><a href="register.php">Register</a></li>';
          }
          ?>
        </ul>
      </section>
    </nav>





    

    <form method="POST" style="margin-top:30px;">
<div class="panel" >
        <div class="leftPanel">
            <img class="logoImage" src="a.jpg"/>
        </div>
        <div class="rightPanel">
            <center><h1 class="heading"><b>Register<b></h1></center>
            <input type="text" name="fname" placeholder="Enter your name"/>
            <input type="email" name="email" placeholder="Enter your mail"/>
            <input type="password" pattern="(?=.*[a-z]).{8,}" title="Must contain at least 8 or more characters" required name="pwd" placeholder="Enter your password"/><br>
            <button  name="sub">Register</button><br>
            Already have an account? <a href="login.php"> Login</a>
        </div>
    </div>
</form>
</body>
</html>
