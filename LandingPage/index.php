<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <style>
    
         <?php include "../../carShop/Assets/css/main.css"?>
        <?php include "../Layout/Header/header.css"?>
        <?php include "../../carShop/LandingPage/Landingpage.css" ?>
        <?php include "../Layout/Footer/footer.css"?>
   </style>
</head>
<body>
    <?php 
        $page ="Home";
        require "../Layout/Header/index.php";       
    ?>
    <!-- start banner -->
    <div class="home-container">
        <div class="banner">
        <div class="banner-left">
             <p class="banner-subheader">Chào mừng bạn đến với SolarFlare</p>
             <h2 class="banner-title">Khám phá thế giới xe hơi cùng chúng tôi 
                 </h2>
             <p class="banner-decription">Chào mừng bạn đến với trang web chuyên biệt trong việc đáp ứng tất cả nhu cầu của bạn về xe hơi. 
                Tại đây, chúng tôi tự hào giới thiệu một bộ sưu tập đa dạng các loại xe từ các hãng uy tín trên toàn thế giới, 
                cùng với dịch vụ chất lượng và thông tin cần thiết để bạn có thể thực hiện một quyết định mua xe thông minh.
            </p>
            <div class="btn-group">
                <a class="btn btn-contain">Mua xe ngay</a>
                <a class="btn btn-outline">Mua linh kiện</a>
            </div>
        </div>
        <div class="banner-right">
            <img class="banner-right-img" src="../Assets/img/car.png" alt="">
        </div>
        </div>
    
    </div>
    <!-- end banner -->
    <!-- mainFeature -->
    <div class="abousus-container">
    <div class="aboutus-left">

    </div>
    <div class="aboutus-right">
        
    </div> 
    </div>
    <!-- Start car list -->
    <div class="car-list">
                <h2 style="text-align: center;">Top xe bán chạy nhất </h2>
                <div class="catagorise">
                    <div class="Brand-chip">
                        <img class="brand-icon" src="../Assets/img/Honda.png" alt="">
                        <div>Honda</div>
                    </div>
                    <div class="Brand-chip">
                        <img class="brand-icon" src="../Assets/img/toyota_logo_icon_249373.png" alt="">
                        <div>Toyota</div>
                    </div>
                    <div class="Brand-chip">
                        <img class="brand-icon" src="../Assets/img/nissan_logo_icon_248364.png" alt="">
                        <div>Nissan</div>
                    </div>
                    <div class="Brand-chip">
                        <img class="brand-icon" src="../Assets/img/mazda_logo_icon_145801.png" alt="">
                        <div>Mazda</div>
                    </div>
                    <div class="Brand-chip">
                        <img class="brand-icon" src="../Assets/img/audi_logo_icon_247535.png" alt="">
                        <div>Audi</div>
                    </div>
                </div>
                <div class="car-grid">
                    <div class="car-paper">
                            <img class="car-img" src="../Assets/img/car2.png" alt="">
                            <h4 class="car-name">CAMRY 2.5Q</h4>
                            <h4 class="price" style="color: red"> 1.405.000.000 vnđ</h4>
                            <h4 class="fill"></h4>
                            <h5 class="catagorise">icon : Toyota</h5>
                            <a href="" class="btn btn-contain btn-buy">Mua </a>
                    </div>
                    <div class="car-paper">
                            <img class="car-img" src="../Assets/img/car2.png" alt="">
                            <h4 class="car-name">CAMRY 2.5Q</h4>
                            <h4 class="price" style="color: red"> 1.405.000.000 vnđ</h4>
                            <h4 class="fill"></h4>
                            <h5 class="catagorise">icon : Toyota</h5>
                            <a href="" class="btn btn-contain btn-buy">Mua </a>
                    </div>
                    <div class="car-paper">
                            <img class="car-img" src="../Assets/img/car2.png" alt="">
                            <h4 class="car-name">CAMRY 2.5Q</h4>
                            <h4 class="price" style="color: red"> 1.405.000.000 vnđ</h4>
                            <h4 class="fill"></h4>
                            <h5 class="catagorise">icon : Toyota</h5>
                            <a href="" class="btn btn-contain btn-buy">Mua </a>
                    </div>
                   
                </div>
        </div>
        <?php 
      
        require "../Layout/Footer/index.php";       
    ?>
</body>
</html>