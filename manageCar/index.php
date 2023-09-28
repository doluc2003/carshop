<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="" method="post" enctype="multipart/form-data">
        <input name="carName" type="text" placeholder="Tên xe">
        <br>
        <input name="carPlace" type="text" placeholder="Nơi Xuất sứ">
        <br>
        <p>chọn kiểu dáng xe</p>
        <select name="model" id="">
            <option selected value="0">--chọn--</option>
        <?php 
                    $conn = mysqli_connect('localhost','root','','db_solarflare');
                    $sql = "SELECT * FROM `tbl_model` ";
                    $model = mysqli_query($conn,$sql);
                    while($row = mysqli_fetch_assoc($model)){
                        echo '<option value="'.$row["id"].'">'.$row['name'].'</option>';
                    }
            ?>                                   
        </select>
        <br>
        <p>chọn kiểu Hãng xe</p>
        <select name="brand" id="">
        <option selected value="0">--chọn--</option>
        <?php 
            $conn = mysqli_connect('localhost','root','','db_solarflare');
            $sql = "SELECT * FROM `tbl_brand` ";
            $model = mysqli_query($conn,$sql);
            while($row = mysqli_fetch_assoc($model)){
                  echo '<option value="'.$row["id"].'">'.$row['name'].'</option>';
              }
            ?>  
                                            
        </select>
        <br>
        <input name="colorName" type="text" placeholder="màu xe">
        Thêm mã màu 
        <input name="colorCode" type="color">
        <br>
        <br>
        Thêm ảnh banner
        <input name="bannerImg" type="file" accept="image/png, image/gif, image/jpeg">
        <br>
        Thêm số chỗ ngồi 
        <input name="seat" type="number">
        <br>
        Thêm Mô tả
        <textarea name="decription" name="" id="" cols="30" rows="10"></textarea>
        <br>
        thêm giá
        <input name="price" type="number">
        <br>
        thêm số lượng xe
        <input type="number" name="amount">
        <br>
        Thêm ảnh xe
        <input name="img-url" type="file" accept="image/png, image/gif, image/jpeg">
        <br>
   
       <button name="btn-submit">xác nhận</button>
    </form>
    <?php
    $imgUrl ="http://localhost/carShop/Assets/img/";
    $target_dir = "../Assets/img/";  
     $error=1;
        if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['btn-submit'])){
            $name = $_POST['carName'];
            $place =$_POST['carPlace'];
            $model =$_POST['model'];
            $brand =$_POST['brand'];
            $color =$_POST['colorName'];
            $seat=$_POST['seat'];
            $price=$_POST['price'];
            $decription=$_POST['decription'];
            $colorCode =$_POST['colorCode'];
            $amount =$_POST['amount'];
            if($name==""){
                echo"bạn chưa chọn Tên Xe";
                $error =0;
            }
            if($model == 0){
                echo "bạn chưa chọn kiểu dáng";
                $error=0;
            }
            if($color==0){
                $error =0;
            }
            if($brand == 0){
                echo "bạn chưa chọn thương hiệu ";
                $error=0;
            }
            echo  $name."-".$place."-".$model."-".$brand."-".$color."-".$seat."-".$price."-".$decription."-".$colorCode."-";
            $temp = explode(".", $_FILES["bannerImg"]["name"]);
            $newbannerimg = round(microtime(true)) . '.' . end($temp);                           
            $target_banner = $target_dir.$newbannerimg;
        if (!move_uploaded_file($_FILES["bannerImg"]["tmp_name"], $target_banner)) {
            echo "bạn chưa chọn ảnh to ";
            $error= 0;
        }
        $temp = explode(".", $_FILES["img-url"]["name"]);
        $newimgurl = round(microtime(true)) . '.' . end($temp);                           
        $target_banner = $target_dir.$newimgurl;
    if (!move_uploaded_file($_FILES["img-url"]["tmp_name"], $target_banner)) {
        echo "bạn chưa chọn ảnh xe";
        $error= 0;
    }
     $imgBacground = $imgUrl.$newbannerimg;
     $img = $imgUrl.$newimgurl;
     if($error==1){
        $conn = mysqli_connect('localhost','root','','db_solarflare');
        $sql = "INSERT INTO `tbl_car`(`name`, `brandId`, `modelId`, `seats`, `country`, `decription`, `imgbackground`, `Paint`, `imgurl`, `paintcolor`, `price`, `amount`) VALUES ('".$name."','".$brand."','".$model."','". $seat."','". $place ."','".$decription."','".$imgBacground."','".$color."','".$img ."','".$colorCode."','".$price."','".$amount."') ";
         $result = mysqli_query($conn,$sql);
        }
     }
?>
</body>
</html>