<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        <?php include "../../carShop/Assets/css/main.css"?>
        <?php include "./login.css"?>
    </style>
</head>
<?php
            $error ="";
            $userName= $password ="";
            $errUser = $errPass ="";
            if($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST["submit"])){
                if(empty($_POST["userName"])){
                    $errUser="Bạn chưa nhập tài khoản !";
                }else $userName = $_POST["userName"];
                if(empty($_POST["password"])){
                    $errPass ="Bạn chưa nhập mật khẩu !";
                }else $password = $_POST["password"];
                if( !empty($_POST["userName"]) && !empty($_POST["password"])){
                    $conn = mysqli_connect('localhost','root','','carshop');
                $sql = "SELECT * FROM tbl_user WHERE username = '".$userName."' AND  password ='".$password."' ";
                $user = mysqli_query($conn,$sql);               
                if($row = mysqli_fetch_assoc($user)){
                    session_start();
                    $_SESSION["userId"] = $row["id"];
                    $_SESSION["name"] =$row["username"];
                    $_SESSION["img"] =$row["img"];
                   if(empty($_SESSION["cart"])){
                        $_SESSION["cart"] = 0;
                   }
                    if($row["role"] == 1){
                        header("location:http://localhost/solar2/carShop/LandingPage/index.php");
                    }else header("location:http://localhost/solar2/carShop/admin/index.php");
                    
                }else{
                    $error = "tài khoản mật khẩu bạn không đúng";
                }                             
                }               
            }
        ?>
<body>
    
    <div class="contain-login" >
        <form action='' method="post">
        <div class="item">
                <h4>Đăng nhập vào website SolarFlare</h4>
            <div>
                <label for="">Tên Đăng nhập *</label>     <span class="error-messeage"><?php echo $errUser ?></span>
                <input type="text" class="inp form-control " name="userName" id="">
              
            </div>
            <div>
                <label for="">Mật khẩu *</label> <span class="error-messeage"><?php echo $errPass ?></span>
                <input type="password" class="inp form-control " name="password" class="">
                
            </div>
            <button name="submit"  class="btn btn-primary btn-contain" type="submit">Đăng nhập</button>
            <div style="color:red"><?php echo $error ?></d>
        </div>
       
        </form>
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>