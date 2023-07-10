<?php
require_once 'config.php';
// require_once 'background2.php';
session_start();?>
<style>
    th{
        background-color: transparent;
        color:black;
    }#t1{
    border-style: outset;
        border-width: 3px;
        border-color: coral;
    }
    table{
        border-collapse:collapse;
    }
    .btn {
    width: 130px;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.btn:hover {
    background-color: #45a049;
}
</style><?php
if(isset($_GET['id'])){?>
    <center><form method="post" action="eproduct1.php">
    <?php
    $_SESSION['id']=$_GET['id'];
    $sql = "SELECT * FROM `classics` where id={$_SESSION['id']}";
    $result = mysqli_query($mysqli,$sql);
    $rows = mysqli_num_rows($result);
        if($rows>0){ 
                echo "<br><h2><center>Edit the data</center></h2>".'<br>';
                // output data of each row
                echo "<table border=\"1\" id='t1' width=\"10%\" align=\"center\" cellpadding='5'>";
                while($row = mysqli_fetch_array($result)){
                echo "<tr>";
                echo "<th>ID</th>";
                echo "<td>" . $row['id'] . "</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<th>Image</th>";?><td>
                <input type="text" name="image" value="<?php echo $row['image']; ?>"></td><?php
                echo "</tr>";
                echo "<tr>";
                echo "<th>Name</th>";?><td>
                <input type="text" name="title" value="<?php echo $row['title']; ?>"></td><?php
                echo "</tr>";
                echo "<tr>";
                echo "<th>Author</th>";?><td>
                <input type="text" name="author" value="<?php echo $row['author']; ?>"></td><?php
                echo "</tr>";
                echo "<th>Genre</th>";?><td>
                <input type="text" name="genre" value="<?php echo $row['genre']; ?>"></td><?php
                echo "</tr>";
                echo "<th>Genre Image</th>";?><td>
                <input type="text" name="im" value="<?php echo $row['im']; ?>"></td><?php
                echo "</tr>";
                echo "<tr>";
                echo "<th>Details</th>";?><td>
                <textarea rows="4" cols="50" name="desc"><?php echo $row['desc'];?><?php
                echo "</textarea></tr>";
                echo "<tr>";
                echo "<th>Price</th>";?><td>
                <input type="text" name="price" value="<?php echo $row['price']; ?>"></td><?php
                echo "</tr>";
                echo "<tr>";
                echo "<th>Quantity</th>";?><td>
                <input type="text" name="no_of_copies" value="<?php echo $row['no_of_copies']; ?>"></td><?php
                echo "</tr></table>";
                
                
               
       echo "<table border=\"0\" width=\"70%\" align=\"center\" cellpadding='20'>";
       echo "<tr>";
       echo "<td>";?><center><button type="submit" name="update2" class="btn btn-primary">Update</button></center>
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
       echo "<td>";
       echo "</td>";
       echo "<td>";
       echo "</td>";
       echo "<td>";
       echo "</td>";
       echo "<td>";
       echo "</td>";
       echo "<td>";?>
    <form method="post" action="aproduct.php">
       <button type="submit" name="" class="btn btn-primary">Back</button></center>
           </form> 
       <?php echo "</td>"; echo "</tr>";}
   }
    
}
?>