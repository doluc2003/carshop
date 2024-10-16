
<?php
    $id = $_GET["id"];
    $conn = mysqli_connect('localhost','root','','db_solarflare');
    $sql = "Delete From `tbl_car` where ID =".$id." ";
    $result = mysqli_query($conn,$sql);
    header("location:http://localhost/carShop/admin/manageCar/index.php?message=delete");
    exit;
?>