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
        <div class="fillter-container">
            <div class="search-content">
                <h2>Tìm kiếm ô tô theo tên </h2>
                    <input type="text" name="" placeholder="Tìm kiếm theo tên" class="inp-search"> <button class="btn btn-contain">tìm</button>
                    
            </div>
            <div class="chk-group">
   
            </div>
            <div class="chk-group">
            <input type="checkbox" class="inp-check" name="ch2" >
            <label for="ch2">xe ô tô 1 </label>
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
        <div>
            <div>

            </div>
        </div>
    </div>
   
</body>
</html>