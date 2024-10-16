<?php
    ob_start();
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         <?php include "../../carShop/Assets/css/main.css"?>
        <?php include "../Layout/Header/header.css"?>
        <?php include "carDetail.css"?>
    </style>
</head>
<body>
<?php 
        $page ="shop";
        require "../Layout/Header/index.php";       
    ?>
    <div style="margin : 4rem"></div>
     <div class="car-banner" style="background-image: url(https://ssa-api.toyotavn.com.vn/Resources/Images/F6E839E1EDED03EAA1FAA5DFAC77F36E.jpg);"> </div>
    <div class="container-car">
        <div class="car-content">
                <div class="car-img">
                    <img class="car-img" src="https://ssa-api.toyotavn.com.vn/Resources/Images/F8B33019CF708D9157E8B8F633DDB447.png" alt="">
                </div>
                <div class="car-info">
                    <div class="carName">COROLLA ALTIS 1.8G</div>
                    <div class= "car-solgan">Đậm chất chơi ngời chuẩn mực</div>
                    <div class="carColor">
                        <span>red</span>
                        <span>blue</span>
                    </div>
                    <div class="car-info-detail">
                        <table>
                        <tr>
                                <td>
                                    <div>Số chỗ ngồi</div>
                                    <div>5 chỗ </div>
                                </td>
                                <td> 
                                    <div>kiểu dáng</div>
                                    <div> sedan</div>
                                </td>
                                <td>
                                    <div>Thương hiệu</div>
                                    <div>ToYota</div>
                                </td>
                            </tr>
                            <tr>
                                <td> 
                                    <div>
                                        xuât xứ
                                    </div>
                                    <div>
                                        Thái Lan
                                    </div>
                                </td>
                                <td colspan="2">
                                    <div>Giá</div>
                                    <div>1.000.0000</div>
                                </td>
                            </tr>
                        </table>
                        <form action="" method="post">
                        <button name="addCart">Thêm vào giỏi hàng</button>
                        </form>
                        <?php
                       
                            if(isset($_POST["addCart"])){
                                $_SESSION["cart"] = $_SESSION["cart"]+1;
                                echo $_SESSION["cart"];
                            }
                        ?>
                    </div>
                </div>
        </div>

    </div>
</body>
</html>