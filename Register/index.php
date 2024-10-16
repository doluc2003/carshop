<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        <?php include "../../carShop/Assets/css/main.css"?>
        <?php include "./register.css"?>
    </style>
<body>
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
                    $conn = mysqli_connect('localhost','root','','db_solarflare');
                $sql = "SELECT * FROM tbl_user WHERE username = '".$userName."' AND  password ='".$password."' ";
                $user = mysqli_query($conn,$sql);               
                if($row = mysqli_fetch_assoc($user)){
                    session_start();
                    $_SESSION["userId"] = $row["id"];
                    $_SESSION["name"] =$row["username"];
                    if($row["role"] == 1){
                        header("location:http://localhost/carShop/LandingPage/index.php");
                    }else header("location:http://localhost/carShop/admin/index.php");
                    
                }else{
                    $error = "tài khoản mật khẩu bạn không đúng";
                }                             
                }               
            }
        ?>
          
    <div class="contain-register" >
            <div class="left-register">

            </div>
            <div class="right-register">
            <form action='' method="post">  
                <h3 style="text-align: center;" >Đăng kí tài khoản để vào SolarFare</h3>   
            <div >
                <label for="">Tên Đăng nhập *</label>     <span class="error-messeage"><?php echo $errUser ?></span>
                <input type="text" class="inp form-control " name="userName" id="">
              
            </div>
            <div>
                <label for="">Email*</label>     <span class="error-messeage"><?php echo $errUser ?></span>
                <input type="text" class="inp form-control " name="userName" id="">
              
            </div >
            <div style="display: flex; gap: 2rem;">
                    <div >
                        <label for="">Số Điện thoại *</label>     <span class="error-messeage"><?php echo $errUser ?></span>
                        <input type="number" class="inp form-control " name="userName" id="">
                    </div>
                    <div >
                        <label for="">giới tính *</label>     <span class="error-messeage"><?php echo $errUser ?></span>
                        <div>
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Nam
                            </label>
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Nữ
                            </label>
                        </div>
                    </div>
                </div>
            
            <div>
                <label for="">Địa chỉ *</label>     <span class="error-messeage"><?php echo $errUser ?></span>
                <input type="text" class="inp form-control " name="userName" id="">
              
            </div>
            <div>
                <label for="">Tên Đăng nhập *</label>     <span class="error-messeage"><?php echo $errUser ?></span>
                <input type="text" class="inp form-control " name="userName" id="">
              
            </div>
            <div>
                <label for="">Mật khẩu *</label> <span class="error-messeage"><?php echo $errPass ?></span>
                <input type="password" class="inp form-control " name="password" class="">
                
            </div>
            <div>
                <label for="">Nhập lại mật khẩu *</label> <span class="error-messeage"><?php echo $errPass ?></span>
                <input type="password" class="inp form-control " name="password" class="">
                
            </div>
            <div style="color:red"><?php echo $error ?></div> 
            <button style="margin-top: 1rem;width:100%; " name="submit"  class="btn btn-primary btn-contain" type="submit">Đăng kí</button>
              
                </form>
        
            </div>
       
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>