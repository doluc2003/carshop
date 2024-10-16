<?php
    $id = $_GET["id"];
    $conn = mysqli_connect('localhost','root','','carshop');
    $sql = "Delete From `tbl_exterior` where Id =".$id." ";
    $result = mysqli_query($conn,$sql);
    header("location:http://localhost/solar2/carShop/admin/manageExtendor/index.php?message=delete");
    exit;
?>