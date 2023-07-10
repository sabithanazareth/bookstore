<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

include 'config.php';


$product_id = $_GET['id'];
$action = $_GET['action'];


if($action === 'empty')
  unset($_SESSION['cart']);

$sql = "SELECT no_of_copies FROM classics WHERE id = ".$product_id;
$result = mysqli_query($mysqli,$sql);


if($result){

  if($obj = $result->fetch_object()) {

    switch($action) {
     

      case "add":
      if($_SESSION['cart'][$product_id]+1 <= $obj->no_of_copies)
        $_SESSION['cart'][$product_id]++;
      break;

      case "remove":
      $_SESSION['cart'][$product_id]--;
      if($_SESSION['cart'][$product_id] == 0)
        unset($_SESSION['cart'][$product_id]);
        break;
    }
  }
}

header("location:cart.php");

?>
