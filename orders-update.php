<?php
//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

include 'config.php';

if(isset($_SESSION['cart'])) {

  $total = 0;

  foreach($_SESSION['cart'] as $product_id => $quantity) {

    $result = $mysqli->query("SELECT * FROM classics WHERE id = ".$product_id);

    if($result){

      if($obj = $result->fetch_object()) {


        $cost = $obj->price * $quantity;

        $user = $_SESSION["email"];

        $query = $mysqli->query("INSERT INTO orders (id,`image`, title, `author`, price, qty, total,user) VALUES('$obj->id','$obj->image','$obj->title', '$obj->author', $obj->price, $quantity, $cost, '$user')");

        if($query){
          $newqty = $obj->no_of_copies - $quantity;
          if($mysqli->query("UPDATE classics SET no_of_copies = ".$newqty." WHERE id = ".$product_id)){

          }
        }

      



      }
    }
  }
}

unset($_SESSION['cart']);
header("location:success.php");

?>
