<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>admin SolarFare</title>
    <!-- Custom fonts for this template-->
    <link href="http://localhost/solar2/carShop/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="http://localhost/solar2/carShop/admin/css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./manageAccessorise.css">
</head>

<body id="page-top">
    <?php 
        ob_start();
        session_start();
    ?>
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="http://localhost/solar2/carShop/admin/index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                <img style="width:2.2rem" src="http://localhost/solar2/carShop/Assets/img/Logo2.png" alt="">
                </div>
                <div class="sidebar-brand-text mx-3">SolarFlare </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item ">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Bảng tin</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                chức năng 
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="http://localhost/solar2/carShop/admin/manageAccount/index.php">
                <i class="fas fa-chart-area "></i>
                    <span>Quản lý tài khoản</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="http://localhost/solar2/carShop/admin/manageCar/index.php">
                <i class="fas fa-solid fa-car"></i>
                    <span>Quản lý xe hơi</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="http://localhost/solar2/carShop/admin/manageBrand/index.php">
                <i class="fas fa-solid fa-car"></i>
                    <span>Quản lý Thương hiệu</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Quản lý loại xe </span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="charts.html">
                <i class="fas fa-regular fa-newspaper"></i>
                    <span>Quản lý tin tức</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="charts.html">
                <i class="fas fa-fw fa-chart-area"></i>
                    <span>Quản lý đăng kí lái thử</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="http://localhost/solar2/carShop/admin/manageAccessorise/index.php">
                <i class="fas fa-regular fa-newspaper"></i>
                    <span>Quản lý linh kiện </span></a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="http://localhost/solar2/carShop/admin/manageExtendor/index.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Quản lý ngoại thất </span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Quản lý nội thất </span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="charts.html">
                <i class="fas fa-fw fa-chart-area"></i>
                    <span>Quản lý hoá đơn</span></a>
            </li>
            
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                  

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                     

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">xin chào, <?php 
                                
                                echo $_SESSION["name"];
                                
                                ?></span>
                                <img class="img-profile rounded-circle"
                                    src=<?php echo $_SESSION["img"]?> alt="ảnh đại diện">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Đăng xuất
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->
                <?php
                     $id = $_GET["id"];
                     $conn = mysqli_connect('localhost','root','','carshop');
                     $sql = "select * from`tbl_acesstory` where ID =".$id." ";
                     $result = mysqli_query($conn,$sql);
                     while($row= mysqli_fetch_assoc($result)){
                    $name = $row['TenSp'];
                     $place =$row['XuatXu'];
                     $model =$row['LoaiSp'];
                     $brand =$row['BrandId'];
                     $price=$row['Gia'];
                     $amount =$row['SoLuong'];
                    $img =$row["HinhAnh"];
                  
                     };
                     
                     
        $imgUrl ="http://localhost/solar2/carShop/Assets/img/";
        $target_dir = "../../Assets/img/";  
        $error=1;
        if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['btn-submit'])){
            $name = $_POST['TenSp'];
            $place =$_POST['XuatXu'];
            $model =$_POST['model'];
            $brand =$_POST['brand'];
            $price=$_POST['Gia'];
            $amount =$_POST['SoLuong'];
            if(empty($name)){
               
                $error =0;
            }
            if(empty($price)){
               
                $error =0;
            }
            if(empty($place)){
               
                $error =0;
            }
            if(empty($amount)){
               
                $error =0;
            }
            if(empty($model)){
               
                $error=0;
            }
            if(empty($brand)){
                
                $error=0;
            }
        
        $temp = explode(".", $_FILES["img-url"]["name"]);
        $newimgurl = round(microtime(true)) . '.' . end($temp);                           
        $target_img = $target_dir.$newimgurl;
    
     $img = $imgUrl.$newimgurl;
    $isimg = move_uploaded_file($_FILES["img-url"]["tmp_name"], $target_img);
     if($error==1){
        $sql="UPDATE `tbl_acesstory` SET `TenSp`='".$name."',`BrandId`='".$brand."',`LoaiSp`='".$model."',`XuatXu`='".$place."',`Gia`='".$price."',`SoLuong`='".$amount."' WHERE ID = ".$_GET["id"];
        if ( $isimg){           
            $sql="UPDATE `tbl_acesstory` SET `TenSp`='".$name."',`BrandId`='".$brand."',`LoaiSp`='".$model."',`XuatXu`='".$place."',`Gia`='".$price."',`SoLuong`='".$amount."', `HinhAnh`='".$img."' WHERE ID = ".$_GET["id"];           
        }
       
        $conn = mysqli_connect('localhost','root','','carshop');
         $result = mysqli_query($conn,$sql);
         header("location:http://localhost/solar2/carShop/admin/manageAccessorise/index.php?message=update");
        }
    }

    if($error ==0){
        echo '
        <div class="container-fluid ">
            <div class="card shadow mb-4 ">
                <div class="card-header bg-danger " style="color:white">
                    Lỗi !
                </div>
                <div class="card-body">
                        bạn chưa nhập đầy đủ thông tin hoặc chưa đúng định dạng, vui lòng thử lại
                </div>
            </div>
        </div>';
    }


?>
    
                <!-- Begin Page Content -->
<div class="container-fluid">
    <div class="card shadow mb-4 ">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Sửa thông tin </h6>
        </div>
        <div class="card-body">
            <form action="" method="post" enctype="multipart/form-data">
           <input class="img-upload" id="bannerImg" name="bannerImg" type="file" accept="image/png, image/gif, image/jpeg">
            </label>           
            </div>
            
           <div class="d-flex align-items-start">
                <div>
                <h6>Ảnh Xe hơi <?php echo ' <span style="color:red">*</span>' ?></h6>
                <label class="lable-url-img" for="url-Img">
                <div class="img-view-url " style="box-shadow:0 0 3px 3px rgba(182, 182, 182, 0.575); border:none; background-image:url(<?php echo $img ?>)">
                        <img width="100px" src="http://localhost/solar2/carShop/Assets/img/UploadIcon.png" alt="">
                        <h6 class="img-view-text">Thêm ảnh xe </h6>
                        <h6>Nhấn vào đây để chọn ảnh</h6>
                </div>             
                <input  class="url-img" id="url-Img" name="img-url" type="file" accept="image/png, image/gif, image/jpeg">         
                </label>  
                       
                </div>
               <div >
                <h6 style="margin-left:10px">Thông tin chi tiết</h6>
                <div class="info-container">
                    <div >
                            <h6>Tên linh kiện <?php echo ' <span style="color:red">*</span>' ?></h6>
                            <input class="form-control" name="TenSp" type="text" value="<?php echo $name?>" placeholder="Điền tên linh kiện...">
                        </div>
                     
                        <div>
                            <h6>Nơi sản xuất <?php echo ' <span style="color:red">*</span>' ?></h6>
                            <input class="form-control" name="XuatXu" type="text" value="<?php echo $place?>" placeholder="Điền nơi sản xuất">
                        </div>
                        <div>
                            <h6>Loại sản phẩm <?php echo ' <span style="color:red">*</span>' ?></h6>
                            <select class="select-sort" name="model" id="">
                            <option selected value="0">--chọn--</option>
                            <?php 
                            $conn = mysqli_connect('localhost','root','','carshop');
                            $sql = "SELECT * FROM `tbl_catagorise` ";
                            $models = mysqli_query($conn,$sql);
                            while($row = mysqli_fetch_assoc($models)){
                                if($model==$row["id"]){
                                    echo '<option  selected value="'.$row["id"].'">'.$row['name'].'</option>';
                                }else echo '<option  value="'.$row["id"].'">'.$row['name'].'</option>';
                            }
                            ?>                                   
                            </select>
                       </div>                                       
                        <div>
                            <h6>Hãng xe <?php echo ' <span style="color:red">*</span>' ?></h6>
                            <select  class="select-sort" name="brand" id="" >
                            <option selected value="0">--chọn--</option>
                                    <?php 
                                        $conn = mysqli_connect('localhost','root','','carshop');
                                        $sql = "SELECT * FROM `tbl_brand` ";
                                        $brands = mysqli_query($conn,$sql);
                                        while($row = mysqli_fetch_assoc($brands)){
                                            if($brand==$row["id"]){
                                                echo '<option  selected value="'.$row["id"].'">'.$row['name'].'</option>';
                                            }else echo '<option  value="'.$row["id"].'">'.$row['name'].'</option>';
                                            
                                        }
                                        ?>  
                                                                        
                             </select>
                        </div>
                        <div>
                        
                    </div>
                    <div>

                 
                   <h6> Giá (vnđ) <?php echo ' <span style="color:red">*</span>' ?></h6>
                    <input class="form-control" name="Gia" min="100000" value="<?php echo $price?>" type="number">
               </div>
           
              <div >
                   <h6> Số lượng (Chiếc) <?php echo ' <span style="color:red">*</span>' ?></h6>
                    <input class="form-control" type="number" value="<?php echo $amount?>" placeholder="Điền số lượng linh kiện" min="0" name="SoLuong">
                
              </div>
              <div>
           
      </div>
                </div>
                </div>
               </div>
              
      <br>
       <button class="btn btn-primary" name="btn-submit">xác nhận</button>
           </div>
              
          
    </form>
   

                    </div>
                   
                </div>
            </div>
                
            <!-- End of Main Content -->

            <!-- Footer -->
           
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Bạn có muốn đăng xuất khỏi hệ thống không ?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Chọn "xác nhận" để đăng xuất khỏi hệ thống </div>
                <div class="modal-footer">
                    <button class="btn btn-danger" type="button" data-dismiss="modal">Huỷ</button>
                    <form action="" method="post" >
                    <button name="submit" class="btn btn-primary" href="">Xác nhận</button>
                    </form>
                    <?php
                        if(isset($_POST["submit"])){
                           
                            session_destroy();
                            header("location: http://localhost/solar2/carShop/Login/index.php");
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <!-- xử lý ảnh -->
    <script>
        const inputFile = document.querySelector(".img-upload");
        const imgageView = document.querySelector(".img-view");
        const inputFileURL = document.querySelector(".url-img");
        const imgageViewURL = document.querySelector(".img-view-url");
        inputFile.addEventListener("change",uploadImg(imgageView,inputFile));
        inputFileURL.addEventListener("change",uploadImg(imgageViewURL,inputFileURL));
        function uploadImg(imgView,inputfile){
            return function(){
                let imgLink = URL.createObjectURL(inputfile.files[0]);
                imgView.style.backgroundImage =`url(${imgLink})`;
                imgView.textContent="";
                imgView.style.border = 'none';
                imgView.style.boxShadow= '0 0 3px 3px rgba(182, 182, 182, 0.575)'
            }
            
        }
    </script>
    <!-- Bootstrap core JavaScript-->
    <script src="http://localhost/solar2/carShop/admin/vendor/jquery/jquery.min.js"></script>
    <script src="http://localhost/solar2/carShop/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="http://localhost/solar2/carShop/admin/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="http://localhost/solar2/carShop/admin/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="http://localhost/solar2/carShop/admin/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="http://localhost/solar2/carShop/admin/js/demo/chart-area-demo.js"></script>
    <script src="http://localhost/solar2/carShop/admin/js/demo/chart-pie-demo.js"></script>

</body>

</html>