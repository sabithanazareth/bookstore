<?php
require_once 'config.php';
// require_once 'background2.php';
if(isset($_GET['id'])){
    $sql = "DELETE FROM `classics` where id={$_GET['id']}";
    $result = mysqli_query($mysqli,$sql);
}
        ?>
<script type="text/javascript">location.href = 'aproduct.php';</script>