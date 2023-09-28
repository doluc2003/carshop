<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <Link href="./header.css"/>
   
</head>
<body>
   
    <header class="header-container">
        <div class="header-icon">
                
                <img style="width:2.2rem" src="http://localhost/carShop/Assets/img/Logo2.png" alt="">
                <div>SolarFlare</div>
        </div>
        <ul class="nav-container">
            <li class="<?php if($page =='Home'){echo 'nav-content active'; }else {echo 'nav-content ';}?>"><a href="http://localhost/carShop/LandingPage/index.php" class="nav-child">Trang Chủ</a></li>
            <li class="<?php if($page =='shop'){echo 'nav-content active'; }else {echo 'nav-content ';}?>"><a href="http://localhost/carShop/Shop/index.php" class="nav-child">Mua xe</a></li>
            <li class="<?php if($page =='linhkien'){echo 'nav-content active'; }else {echo 'nav-content ';}?>"><a href="" class="nav-child">Mua Linh Kiện</a></li>
            
            <li class="<?php if($page =='tintuc'){echo 'nav-content active'; }else {echo 'nav-content ';}?>"><a href="" class="nav-child">Tin Tức</a></li>
            <li class="<?php if($page =='tintuc'){echo 'nav-content active'; }else {echo 'nav-content ';}?>"><a href="http://localhost/carShop/abc/index.php" class="nav-child">địt mẹ</a></li>
        </ul>
        <div class="header-login">
                <a class="btn btn-contain" href="http://localhost/carShop/Login/index.php">Đăng nhập</a>
                <a class="btn btn-outline" href="http://localhost/carShop/Signup/index.php">Đăng kí</a>
        </div>
    </header>
</body>
</html>