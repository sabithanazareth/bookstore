<html>
    <head>
    <title>Book Shelf Admin</title>
    
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="icon" type="image/ico" href="logo.jpg" />
    <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
</head>
<style>
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 10px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 150px;
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

input[type=reset] {
    width: 150px;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=reset]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>

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
</body>
</html>
<?php
require_once 'config.php';
// require_once 'background2.php';
$msg='';
$msgClass='';
if(isset($_POST['submit2'])){
    $id=($_POST['id']);
    $image=($_POST['image']);
    $title=($_POST['title']);
    $author=($_POST['author']);
    $desc=($_POST['desc']);
    $price=($_POST['price']);
    $genre=($_POST['genre']);
    $im=($_POST['im']);
    $no_of_copies=($_POST['no_of_copies']);
    if(!empty($id) && !empty($image) && !empty($title) && !empty($author)&& !empty($desc) && !empty($price) && !empty($no_of_copies)&& !empty($genre)&& !empty($im)){
        $msg='New Product Added Successfully';
        $msgClass='alert-success';
        $sql="INSERT INTO `classics`(`id`,`image`,`title`,`author`,`genre`,`im`,`desc`,`price`,`no_of_copies`) VALUES ('{$id}','{$image}','{$title}','{$author}','{$genre}','{$im}','{$desc}','{$price}','{$no_of_copies}')";
        $result = mysqli_query($mysqli,$sql);

    }else{
        $msg='Please fill in all the details';
        $msgClass='alert-danger';
    }}?>
<!DOCTYPE html>
<html>
<head>
<link rel="icon" type="image/ico" href="logo.jpg" />
</head>
<body>
<!-- <form method="post" action="aproduct.php">
    <input type="submit" name="back"value ="Back" >
    </form> -->
<br><center><h3><b>Add Product<b></h3></center><br>

<div class="container">
    <?php if($msg!=''):?>
        <div class="alert <?php echo $msgClass;?>"><?php echo $msg;?></div>
<?php endif;?>
    <form method="post" action="addproduct.php">
   
<div>
  <form action="/action_page.php">
<label>ID</label>
 <input type="text" name="id"  value="<?php echo isset($_POST['id'])? $id:'';?>">

    <label>Image URL</label>
            <input type="text" name="image"  value="<?php echo isset($_POST['image'])? $image:'';?>">

    <label>Title</label>
            <input type="text" name="title"  value="<?php echo isset($_POST['title'])? $title:'';?>">

 <label>Author</label>
            <input type="text" name="author"  value="<?php echo isset($_POST['author'])? $author:'';?>"> <label>Details</label>
            <input type="text" name="desc" value="<?php echo isset($_POST['desc'])? $desc:''; ?>">

<label>Price</label>
            <input type="text" name="price"  value="<?php echo isset($_POST['price'])? $price:''; ?>">

<label>Quantity</label>
            <input type="text" name="no_of_copies"  value="<?php echo isset($_POST['no_of_copies'])? $no_of_copies:''; ?>">

<label>Genre</label>
            <input type="text" name="genre"  value="<?php echo isset($_POST['genre'])? $genre:''; ?>">

<label>Genre image</label>
            <input type="text" name="im"  value="<?php echo isset($_POST['im'])? $im:''; ?>">

        <br><center>
        <input type="submit" name="submit2" value="Add Product"><br><input type="reset" value ="Reset" >
    </form><br>
    <br>
   </div>
</body>
</html>
