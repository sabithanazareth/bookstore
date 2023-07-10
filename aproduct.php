<style>
body{
    color:black;
}
input[type=submit] {
    width: 130px;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

.btn
{
    width: 80px;
    background-color: #3CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

</style>
<!DOCTYPE html>
<html>
    <head>
    <title>Book Shelf Admin</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/minty/bootstrap.min.css">
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="icon" type="image/ico" href="logo.jpg" />
    <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
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
      <li><a href="aproduct.php">Products</a></li>
      <li><a href="adlogin.php">Log Out</a></li>
  
      </ul>
    </section>
  </nav>

  <div class="container">
   <br>
    <p align="center"><b>Welcome Admin!<b></p>
    <p id="pr2" align="center"><b> View, Add, Update or Delete products<b></p>
    <!-- <form method="post" action="aproduct.php">
    <button id="product" type="submit" name="product" class="button1">Product</button>
    </form> -->
</div>
    </body>
</html>
<?php
require_once 'config.php';
// require_once 'background2.php';
echo "<table border=\"0\" width=\"50%\" align=\"center\" cellpadding='20'>";
echo "<tr>";
echo "<td>";?> 
<!-- <form method="post" action="adlogin.php"><br><br><br>
<input type="submit" name="back" value="Back">
</form> -->
</form><?php
echo "</td>";
echo "<td>";
echo "</td>";
echo "<td>";
echo "</td>";
echo "<td>";
echo "</td>";
echo "<td>";
echo "</td>";
echo "<td>";?>
<br><br><br>
  <form method="post" action="addproduct.php"><center>  <input type="submit" name="add" value="Add Product"/>
</form></center>
<?php echo "</td>"; echo "</tr>";?>

<?php
$sql = "SELECT * FROM `classics`";
$result = mysqli_query($mysqli,$sql);
$rows = mysqli_num_rows($result);
                                if ($rows > 0) {?><center><h3></center></h3><?php
                                    echo "<table border=\"1\" id='t1' width=\"50%\" align=\"center\" cellpadding='10'>";
                                    echo "<tr>";
                                        echo "<th>ID</th>";
                                        echo "<th>Image URL</th>";
                                        echo "<th>Title</th>";
                                        echo "<th>Author</th>";
                                        echo "<th>Genre</th>";
                                        echo "<th>Genre Image</th>";
                                        echo "<th>Details</th>";
                                        echo "<th>Price</th>";
                                        echo "<th>Quantity</th>";
                                        echo "<th></th>";
                                        echo "<th></th>";
                                        echo "</tr>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['id'] . "</td>";
                                        echo "<td>" . $row['image'] . "</td>";
                                        echo "<td>" . $row['title'] . "</td>";
                                        echo "<td>" . $row['author'] . "</td>";
                                        echo "<td>" . $row['genre'] . "</td>";
                                        echo "<td>" . $row['im'] . "</td>";
                                        echo "<td>" . $row['desc'] . "</td>";
                                        echo "<td>" . $row['price'] . "</td>";
                                        echo "<td>" . $row['no_of_copies'] . "</td>";
                                        echo "<td><a href='eproduct.php?id=".$row['id']."' class='btn btn-primary'>Edit</a></td>";
                                        echo "<td><a href='dproduct.php?id=".$row['id']."' class='btn btn-primary'>Delete</a></td>";
                                        echo "</tr>";
                                }
                                echo "</table>";
                            }
?>

