<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        <?php include "../../carShop/Assets/css/main.css"?>
        <?php include "./login.css"?>
    </style>
</head>
<?php
            $error="";
            if($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST["submit"])){
                
                $conn = mysqli_connect('localhost','root','','db_solarflare');
                $sql = "SELECT * FROM tbl_user WHERE username = '".$_POST["userName"]."' AND  password ='".$_POST["password"]."' ";
                $user = mysqli_query($conn,$sql);
                
                if($row = mysqli_fetch_assoc($user)){
                    session_start();
                    $_SESSION["userId"] = $row["id"];
                    $_SESSION["name"] =$row["username"];
                    if($row == 1){
                        header("location:http://localhost/carShop/LandingPage/index.php");
                    }else header("location:http://localhost/carShop/admin/index.php");
                    
                }else{
                    $error = "tài khoản mật khẩu bạn không đúng";
                }                             
            }
        ?>
<body>
    
    <div class="contain">
        <form action="" method="post">
        <div class="item">
            <div>
                <label for="">Tên Đăng nhập</label>
                <input type="text" name="userName" id="">
                
            </div>
            <div>
                <label for="">Mật khẩu </label>
                <input type="password" name="password" class="">
            </div>
            <button name="submit" type="submit">xác nhận</button>
            <div style="color:red"><?php echo $error ?></div>
        </div>
       
        </form>
        
    </div>
</body>
</html>