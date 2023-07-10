<style>

.btn {
    width: 150px;
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
</style>

<?php
require_once 'config.php';
// require_once 'background2.php';
session_start();
$id=$_SESSION['id'];
$image=$_POST['image'];
$title=$_POST['title'];
$author=$_POST['author'];
$desc=$_POST['desc'];
$price=$_POST['price'];
$no_of_copies=$_POST['no_of_copies'];
$genre=$_POST['genre'];
$im=$_POST['im'];

if(isset($_POST['update2']))
{
    $id=$_SESSION['id'];
    
    $query="UPDATE `classics` SET `image`='$image',`title`='$title',`author`='$author',`genre`='$genre',`im`='$im',`price`='$price',`desc`='$desc',`no_of_copies`='$no_of_copies' WHERE id='$id'";
    $result = mysqli_query($mysqli,$query);
        if($result!=NULL){
        echo '<br>'.'<h2>'."<center>Values updated".'</h2>'.'<br>';
        $sql = "SELECT * FROM `classics` WHERE  id='$id'";
        $result = $mysqli->query($sql);

            if ($result->num_rows > 0) {
                //echo "Displaying inserted values".'<br>';
                // output data of each row
                echo "<table border=\"1\" width=\"80%\" align=\"center\" cellpadding='20'>";
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
                echo "</tr>";
            }
            echo "</table>";
        }
    }
}
?>

<center><br><br><form method="post" action="aproduct.php">
<button type="submit" name="" class="btn btn-primary btn-lg">Data table</button></center>
    </form>

</body>
</html>





       