<!-- ALTER TABLE ulogin AUTO_INCREMENT=4000; -->
<?php

require_once 'config.php';
// require_once 'background.php';


//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

if(isset($_SESSION["email"])){

        //header("location:index.php");
}

$msg='';
$msgClass='';
if(isset($_POST['email'])){
    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql="SELECT * from `login` where email='".$email."' AND pwd='".$password."' limit 1";
    $result = mysqli_query($mysqli,$sql);
    while($row = mysqli_fetch_array($result)){
        $row1=$row['email'];
        $row2=$row['fname'];
        $_SESSION['email']=$row1;
        $_SESSION['fname']=$row2;
        //session_start();
    }
    
    $rows = mysqli_num_rows($result);
    if($rows==1){
         echo "<script> location.href='cart.php'; </script>";
        exit;
    }
    else{
        $msg='Incorrect email/password';
        $msgClass='alert-danger';
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" type="image/ico" href="logo.jpg" />
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
            echo '<li class="active"><a href="login.php">Log In</a></li>';
            echo '<li><a href="register.php">Register</a></li>';
          }
          ?>
        </ul>
      </section>
    </nav>

<form method="post">
<div class="panel" >
        <div class="leftPanel">
        <?php if($msg!=''):?>
        <div class="alert <?php echo $msgClass;?>"><?php echo $msg;?></div>
<?php endif;?>
            <img class="logoImage" src="a.jpg"/>
        </div>
        <div class="rightPanel">
            <center><h1 class="heading">Log In</h1><br></center>
            <input type="text" name="email" placeholder="Enter your email"/>
            <input type="password"  name="password" placeholder="Enter your password"/><br>
            <button  name="sub">Login</button>
            <a href="register.php"><p>Don't have an account?</p>Signup</a>
        </div>
    </div>
</form>
</body>
</html>