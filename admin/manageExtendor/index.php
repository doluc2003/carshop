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
            <li class="nav-item ">
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
            <li class="nav-item">
                <a class="nav-link" href="http://localhost/solar2/carShop/admin/manageAccessorise/index.php">
                <i class="fas fa-regular fa-newspaper"></i>
                    <span>Quản lý linh kiện </span></a>
            </li>
            <li class="nav-item active">
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
                    if (!isset ($_GET["page"]) ) {

                        $page = 1;
                        
                        } else {
                        
                        $page = $_GET["page"];
                        
                        }
                        $results_per_page = 5;

                        $page_first_result = ($page-1) * $results_per_page;
                        $conn = mysqli_connect('localhost','root','','carshop');

                        $sql ="select * from tbl_exterior";
                        if(isset($_GET["search"])){
                            $sql ="select * from tbl_exterior where name like '%".$_GET["search"]."%'";
                        }
                        $result = mysqli_query($conn, $sql);
                        $number_of_result = mysqli_num_rows($result);
                        $number_of_page = ceil ($number_of_result / $results_per_page);
                ?>
                <!-- Begin Page Content -->
                <?php
                  if(isset($_GET["message"])){
                    if($_GET["message"]== "delete"){
                        echo '
                        <div class="container-fluid ">
                            <div class="card shadow mb-4 ">
                                <div class="card-header bg-success " style="color:white">
                                    Thông báo !
                                </div>
                                <div class="card-body">
                                        Xoá bản ghi thành công !
                                </div>
                            </div>
                        </div>';
                    }else if($_GET["message"]=="update"){
                        echo '
                        <div class="container-fluid ">
                            <div class="card shadow mb-4 ">
                                <div class="card-header bg-success " style="color:white">
                                Thông báo !
                                </div>
                                <div class="card-body">
                                        Cập nhật bản ghi thành công !
                                </div>
                            </div>
                        </div>';
                    }else   echo '
                    <div class="container-fluid ">
                        <div class="card shadow mb-4 ">
                            <div class="card-header bg-success " style="color:white">
                            Thông báo !
                            </div>
                            <div class="card-body">
                                    Thêm bản ghi thành công !
                            </div>
                        </div>
                    </div>';
                  
                }
                ?>
            <div class="container-fluid">
                
            <div class="card shadow mb-4 ">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">DANH SÁCH NGOẠI THẤT</h6>
                    </div>
                    <div class="card-body">
                        <div class="py-3 d-flex flex-row align-items-center justify-content-between">
                        <form
                        method="get"
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <?php
                                $search ="";
                                if(isset($_GET["search"])){
                                    $search = $_GET["search"];
                                }
                            ?>
                            <input name="search" type="text" value="<?php echo $search?>" class="form-control bg-light border-0 small" placeholder="Tìm kiếm theo tên.."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                    <a href="http://localhost/solar2/carShop/admin/manageExtendor/create.php" class="btn btn-success">Thêm sản phẩm</a>
                        </div>
                    <table class="table">
                        <thead>
                            <tr>
                            <th style="text-align: center;" scope="col">STT</th>
                            <th style="text-align: center;" scope="col">Tên sản phẩm</th>
                            <th style="text-align: center;" scope="col">Xuất xứ</th> 
                            <th style="text-align: center;" scope="col">Xe</th> 
                            <th  style="text-align: center;"scope="col">Thương hiệu</th>                          
                            <th style="text-align: center;" scope="col">số lượng (chiếc)</th>
                            <th style="text-align: center;" scope="col">Đơn giá (vnđ)</th>
                            <th style="text-align: center;" scope="col">Thao Tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                              //xử lý tiền tệ              
                if (!function_exists('currency_format')) {

                    function currency_format($number, $suffix = ' <sup style="color: black;">vnđ</sup>') {
                        if (!empty($number)) {
                            return number_format($number, 0, ',', '.') ;
                        }
                    }               
                }
                                
                                 $sql = "SELECT e.Id, e.name as name ,e.amount,b.name as brand ,e.country,e.price,c.name  as car  FROM tbl_exterior e
                                 JOIN tbl_car c ON c.id = e.carId
                                 JOIN tbl_brand b ON b.id = e.BrandId
                
                                 LIMIT " . $page_first_result . "," . $results_per_page;
                                 if(isset($_GET["search"])){
                                    $sql = "SELECT e.Id, e.name as name ,e.amount,b.name as brand ,e.country,e.price,c.name  as car  FROM tbl_exterior e
                                    JOIN tbl_car c ON c.id = e.carId
                                    JOIN tbl_brand b ON b.id = e.BrandId
                                
                                    where e.name like '%".$_GET["search"]."%'
                                    LIMIT ". $page_first_result ."," . $results_per_page;
                                 }
                                
                                 $car = mysqli_query($conn,$sql);
                                 $count = 1;
                                 if(mysqli_num_rows($car) >0 ){
                                    while($row = mysqli_fetch_assoc($car)){
                                        echo'<tr>';
                                        echo' <th style="text-align: center;" scope="row">'.$count.'</th>';
                                        echo'  <td>'.$row["name"].'</td>';
                                        echo' <td>'.$row["country"].'</td>';
                                        echo' <td>'.$row["car"].'</td>';
                                        echo'<td>'.$row["brand"].'</td>';
                                        echo' <td style="text-align:right" >'.$row["amount"].'</td>';
                                        echo'<td style="text-align:right">'.currency_format($row["price"]).'</td>';
                                        echo'  <td style="text-align: center;">';
                                        echo'<a href="./update.php?id='.$row["Id"].'" class="btn btn-primary">sửa</a>';
                                        echo' <a onclick="handelDelete('.$row["Id"].')"  data-toggle="modal" data-target="#DeleteModal" class="btn btn-danger">xoá</a>';
                                        echo'  </td>';
                                        echo'  </tr>'; 
                                        $count++;                                  
                                   }
                                 }else echo " <h4 style='color:red ;text-align:center'>Không tồn tại bản ghi nào</h4>"
                               
                            ?>    
                                        
                        </tbody>
                        </table>
                        <h6 style="text-align:end">Tổng số bản ghi hiển thị <?php echo mysqli_num_rows($car) ?> bản ghi</h6>
                    </div>
                   <div class="d-flex flex-row align-items-center justify-content-center">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                
                            
                                <?php
                                if($page>=2){
                                    echo ' <li class="page-item">
                                    <a class="page-link" href="index.php?page='.($page-1).'&?search='.$search.'" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                    </a>
                                    </li>';
                                }
                                if($number_of_page>1){
                                    for($i = 1; $i<= $number_of_page; $i++) {
                                        if($page == $i){
                                            echo ' <li class="page-item active" aria-current="page"><a class="page-link" href="index.php?page='.$i.'&?search='.$search.'">'.$i.'</a></li>';
                                        }else echo ' <li class="page-item" aria-current="page"><a class="page-link" href="index.php?page='.$i.'&?search='.$search.'">'.$i.'</a></li>';
                                        
                                }
                                }
                                
                                if($page<$number_of_page){
                                    echo' <li class="page-item">
                                    <a class="page-link" href="index.php?page='.($page+1).'&?search='.$search.'" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                    </a>    
                                    </li>';
                                }
                                ?>

                           
                            </ul>
                            </nav>
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
    <!-- delete modal -->
    <div class="modal fade" id="DeleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Bạn có muốn xoá bản ghi này không?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Chọn "xác nhận" để xoá bản ghi này </div>
                <div class="modal-footer">
                    <button class="btn btn-danger" type="button" data-dismiss="modal">Huỷ</button>
                   
                    <a  class="btn btn-primary " id="delete-modal" href="">Xác nhận</a>
                   
                   
                </div>
            </div>
        </div>
    </div>
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
    <!-- xử lý xoá -->
    <script>
        const deletebox = document.getElementById("button-delete");
        const deleteButton = document.getElementById("delete-modal")
      
        function handelDelete(id){
            deleteButton.href ="./delete.php?id="+id;        
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