<?php
require_once 'config.php';
$msg='';
$msgClass='';
if(isset($_POST['sub'])){
    $uname=$_POST['uname'];
    $pass=$_POST['pass'];

    $sql="SELECT * FROM `admin` where aName='$uname' AND aPass='".$pass."' limit 1";
    $result = mysqli_query($mysqli,$sql);
    $rows = mysqli_num_rows($result);
        if($rows==1){
         echo "<script> location.href='aproduct.php'; </script>";
        exit;
    }
    else{
        $msg='Incorrect username/password';
        $msgClass='alert-danger';
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
    <title>Book Shelf Admin</title>
    <link rel="stylesheet" type="text/css" href="style3.css">
    <link rel="icon" type="image/ico" href="logo.jpg" />
</head>
<body>


<form method="post">

<div class="panel" >
        <div class="leftPanel">
        <?php if($msg!=''):?>
        <div class="alert <?php echo $msgClass;?>"><?php echo $msg;?></div>
<?php endif;?>
            <img class="logoImage" src="a.jpg"/>
        </div>
        <div class="rightPanel">
            <h1 class="heading">Admin Log In</h1>
            <input type="text" name="uname" placeholder="Enter your name"/><br>
            <input type="password"  name="pass" placeholder="Enter your password"/><br><br>
            <button  name="sub">Login</button>
        </div>
    </div>
</form>
</body>
</html>