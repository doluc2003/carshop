

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
    <header class="header-container">
        <div class="header-icon">
                
                <img style="width:2.2rem" src="http://localhost/carShop/Assets/img/Logo2.png" alt="">
                <div>SolarFlare</div>
        </div>
        <ul class="nav-container">
            <li class="<?php if($page =='Home'){echo 'nav-content active'; }else {echo 'nav-content ';}?>"><a href="http://localhost/solar2/carShop/LandingPage/index.php" class="nav-child">Trang Chủ</a></li>
            <li class="<?php if($page =='shop'){echo 'nav-content active'; }else {echo 'nav-content ';}?>"><a href="http://localhost/solar2/carShop/Shop/index.php?page=1" class="nav-child">Mua xe</a></li>
            <li class="<?php if($page =='linhkien'){echo 'nav-content active'; }else {echo 'nav-content ';}?>"><a href="http://localhost/solar2/carShop/acesstory/index.php" class="nav-child">Mua Linh Kiện</a></li>
            <li class="<?php if($page =='abc'){echo 'nav-content active'; }else {echo 'nav-content ';}?>"><a href="http://localhost/solar2/carShop/manageCar/index.php" class="nav-child">Dịch vụ</a></li>
            <li class="<?php if($page =='tintuc'){echo 'nav-content active'; }else {echo 'nav-content ';}?>"><a href="http://localhost/solar2/carShop/abc/index.php" class="nav-child">Tin Tức</a></li>
            <li class="<?php if($page =='ngoaithat'){echo 'nav-content active'; }else {echo 'nav-content ';}?>"><a href="http://localhost/solar2/carShop/extendor/index.php" class="nav-child">Ngoại thất</a></li>

        </ul>
        
    <?php
   
        if(empty($_SESSION["name"])){
            echo '
            <div class="header-login">
            <a class="btn btn-contain" href="http://localhost/solar2/carShop/Login/index.php">Đăng nhập</a>
            <a class="btn btn-outline" href="http://localhost/solar2/carShop/Register/index.php">Đăng kí</a>
            </div>
            ';
        }else {
           echo '
           <div class="header-profile">
           <div class="cart">
               <div class="bages">'.$_SESSION["cart"].'</div>
           </div>
           <div class="profile" onclick="handleClick()" style="background-image: url('.$_SESSION["img"].'") ?> >  
               <div class="profile-menu">
                   <a href="http://localhost/carShop/Profile/index.php">
                   <div> xin chào, ' .$_SESSION["name"].' </div>
                   </a>
                      
                           <hr>
                       <div>Hồ sơ</div>
                       <form action="" method="post">
                       <button class="logout" name="logout">Đăng xuất</button>
                       </form>
                       
               </div>
           </div>
   </div>
           ';
        }
    ?>  

      
       <?php
            if(isset($_POST["logout"])){
                session_destroy();
                header("location:http://localhost/carShop/LandingPage/index.php");
            }
       ?>
    </header>
    <script>
        let menubutton = document.querySelector(".profile")
        let menu = document.querySelector(".profile-menu");
        function handleClick(e){
            menu.classList.add("show")
            
        }
        window.onclick = function(event) {
            
        if (event.target !== menubutton ) {
            menu.classList.remove("show");
            console.log("ngoài")    
        }else console.log("trong")
    }
    </script>
    </body>
    </html>

