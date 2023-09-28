<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
         <?php include "../Assets/css/main.css"?>
        <?php include "../Layout/Header/header.css"?>
        <?php include "../Shop/shop.css" ?>
   </style>
</head>
<body>
<?php 
$page ="shop";
require "../Layout/Header/index.php";       
?>
<button class="btn btn-contain">ádfádfádf</button>
<!-- start content -->
    <div class="container">
        <form action="">
            <input type="text" name="" placeholder="Tìm kiếm theo tên" class="inp-search"> <button class="btn btn-contain">tìm</button>
            <label for="">giá :</label>
            <select name="" id="">
                <option value="">chọn</option>
                <option value="">từ cao đến thâp</option>
                <option value="">từ Thấp đến cao</option>
            </select>
            <div class="fillter-container">           
                <div class="chk-group"> 
                <?php 
                    $conn = mysqli_connect('localhost','root','','db_solarflare');
                    $sql = "SELECT * FROM `tbl_model` ";
                    $model = mysqli_query($conn,$sql);
                    while($row = mysqli_fetch_assoc($model)){
                        echo ' <div>';
                        echo '<input type="checkbox" class="inp-check" value="'.$row["id"].'" name="'.$row["name"].'" >';
                        echo ' <label for="'.$row["name"].'">'.$row["name"].'</label>';
                        echo " </div>";
                    }
            ?>                        
            </div>
            <div class="chk-group">
           
            </div>
            <div class="chk-group">
            <input type="checkbox" class="inp-check" name="ch2" >
            <label for="ch2">xe ô tô 1 </label>
            </div>
            <div class="chk-group">
            <input type="checkbox" class="inp-check" name="ch4" >
            <label for="ch4">xe ô tô 1 </label>
            </div>
            <div>
                <h2>Chọn khoảng giá</h2>
                <div>
                    <input type="number" name="" id="">
                    <input type="number" name="" id="">
                </div>
            </div>
        </div>
         </form>
      <div class="car-container">
           <div class="car-grid">
            <?php
                 $sql = "SELECT * FROM `tbl_model` ";
                 $model = mysqli_query($conn,$sql);
                 while($row = mysqli_fetch_assoc($model)){
                    echo '<div class="car-paper">    ';
                    echo '<div class="car-img2" style="background-image: url(../Assets/img/1be5274f950e1a3efe42894675f002cc.jpg);"></div>';
                    echo ' <h4 class="car-name">CAMRY 2.5Q</h4>';
                    echo '<h4 class="price" style="color: red"> 1.405.000.000 vnđ</h4>';
                    echo ' <h4 class="fill"></h4>     ';
                    echo ' <a href="" class="btn btn-contain btn-buy">Mua </a>';
                    echo ' </div>';
                 }
            ?>                                                                                                           
               
           </div> 
                 
      </div>
    </div>
   
</body>
</html>