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
    
    <style type="text/css">
         <?php include "../Assets/css/main.css"?>
        <?php include "../Layout/Header/header.css"?>
        <?php include "../acesstory/acesstory.css" ?>
   </style>
</head>
<body>
    
<?php 

$page ="linhkien";
require "../Layout/Header/index.php";       
?>

<!-- start content -->
    <div class="container-shop">  
        <form id="form" method="get" action="">
            <div class="fillter-header">
                
            <h2>Bộ lọc</h2>
            <?php 
            $search ="";
                if(isset($_GET["search"])){
                    $search =$_GET["search"];
                }
            ?>
           <select name="sort" class="form-select form-select-sm select-sort " id="">
                <?php
                $sort ="";
                $selected ="";
                if(isset($_GET["sort"])){
                    $sort =$_GET["sort"];
                  
                }
                ?>
                <option value="" <?php $sort  ? "selected":"" ?> >Sắp xếp theo giá</option>
                <option value="DESC" <?php if($sort  == "DESC") echo"selected" ?> >Giá:Cao đến Thấp</option>
                <option value="ASC"  <?php if($sort  == "ASC") echo "selected" ?> >Giá:Thấp đến Cao</option>
                
            </select>
            <input type="text" value="<?php echo $search ?>"  name="search" placeholder="Tìm kiếm theo tên" class="inp-search"> <button class="btn btn-contain">tìm</button>
            
            
            </div>
           
            
            <div class="fillter-container">           
                <div class="chk-group"> 
                <h2>Loại Sản Phẩm</h2>
                <?php 
                    $conn = mysqli_connect('localhost','root','','carshop');
                    $sql = "SELECT * FROM `tbl_catagorise` ";
                    $type = mysqli_query($conn,$sql);
                    
                    while($row = mysqli_fetch_assoc($type)){
                        $checked = "";
                        if(isset($_GET["name"])){
                            if(in_array($row["id"], $_GET["name"])){
                                $checked = "checked";
                            }
                        }                       
                        echo '<div>';
                        echo '<input type="checkbox" '.$checked .' class="checkbox" value="'.$row["id"].'" name="type[]" >';
                        echo '<label for="type[]">'.$row["name"].'</label>';
                        echo "</div>";
                    }
            ?>                        
            </div>
                  
                <div class="chk-group"> 
                    <h2>Thương Hiệu</h2>
                <?php 
                    
                    $sql = "SELECT * FROM `tbl_brand` ";
                    $brand = mysqli_query($conn,$sql);
                    
                    while($row = mysqli_fetch_assoc($brand)){
                        $checked = "";
                        if(isset($_GET["brand"])){
                            if(in_array($row["id"], $_GET["brand"])){
                                $checked = "checked";
                            }
                        }
                        
                        echo '<div>';
                        echo '<input type="checkbox" '.$checked .' class="checkbox" value="'.$row["id"].'" name="brand[]" >';
                        echo '<label for="brand[]">'.$row["name"].'</label>';
                        echo "</div>";
                    }
            ?>                        
            </div>
            <div>
                <h2>Chọn khoảng giá</h2>
                <div>
                <select name="price" class="form-select form-select-sm select-sort" id="">
                <?php
                $price ="";
                $selected ="";
                if(isset($_GET["price"])){
                    $price =$_GET["price"];
                }
                ?>
                <option value="" <?php $price  ? "selected":"" ?> >Chọn khoảng giá</option>
                <option value="1" <?php if($price  == "1") echo"selected" ?> >dưới 1 triệu</option>
                <option value="2" <?php if($price  == "2") echo"selected" ?> >3 đến 5 triệu</option>
                <option value="3" <?php if($price  == "3") echo"selected" ?> >5 đến 10 triệu </option>
                <option value="4" <?php if($price  == "4") echo"selected" ?> >trên 10 triệu</option>
                
            </select>
                </div>
            </div>
            <button class="btn btn-contain" type="submit" name="btn-submit">Lọc</button>
        </div>
        <input type="nunber" style="display:none" value="1" name="page">
         </form>
      <div class="car-container">

           <div class="car-grid">
                <?php
                //xử lý tiền tệ              
                if (!function_exists('currency_format')) {

                    function currency_format($number, $suffix = ' <sup style="color: black;">vnđ</sup>') {
                        if (!empty($number)) {
                            return number_format($number, 0, ',', '.') .$suffix;
                        }
                    }               
                }
            //xử lý fillter
               $typevalue="";
                if(isset($_GET["type"])){
                   
                    $type =$_GET["type"];
                    $typevalue=$type[0];
                    for($i=1;$i<count($type);$i++){
                        $typevalue =$typevalue.",".$type[$i];
                    }
                }
               
                $brandvalue="";
                if(isset($_GET["brand"])){                  
                    $brand =$_GET["brand"];
                    $brandvalue=$brand[0];
                    for($i=1;$i<count($brand);$i++){
                        $brandvalue =$brandvalue.",".$brand[$i];
                    }
                }
                //query lọc giá
                $priceValue ="";
                if(isset($_GET["price"])){
                    switch($_GET["price"]){
                        case 1:
                        $priceValue = " a.Gia < 1000000";
                        break;
                        case 2:
                            $priceValue = " a.Gia BETWEEN 3000000 AND 5000000";
                        break;
                        case 3:
                            $priceValue = " a.Gia BETWEEN 5000000 AND 10000000";
                        break;
                        case 4:
                            $priceValue = " a.Gia > 10000000";
                        break;
                        default: $priceValue ="";
                        }
                }
             
                $conditional ="";
                if(isset($_GET["type"])){
                    if(strcmp($conditional,"where")==0){
                        $conditional = $conditional."where a.LoaiSp in ($typevalue)";
                    }else $conditional =$conditional." and a.LoaiSp in ($typevalue)";                  
                }
                if(isset($_GET["brand"])){
                    if(strcmp($conditional,"where")==0){
                        $conditional = $conditional."where b.id in ($brandvalue)";
                    }else $conditional =$conditional." and b.id in ($brandvalue)";   
                }

               //tìm kiếm theo tên 
                if(isset($_GET["search"]) && !empty($_GET["search"])){
                    if(strcmp($conditional,"where")==0){
                        $conditional = $conditional."where a.TenSp like '%".$_GET["search"]."%'";
                    }else $conditional =$conditional." and a.TenSp like '%".$_GET["search"]."%'";  
                }
               // tìm kiếm theo giá 
                if(isset($_GET["price"]) && !empty($_GET["price"])){
                    if(strcmp($conditional,"where")==0){
                        $conditional = $conditional."where ".$priceValue;
                    }else $conditional =$conditional." AND".$priceValue;  
                }
              
                //sắp xếp theo giá
                $order="";
                if(isset($_GET["sort"])){
                    $order = "ORDER BY a.Gia ".$_GET["sort"];
                }
                //xử lý phân trang 
                $results_per_page = 6;
                $sql = "SELECT a.ID, a.TenSp as name ,a.HinhAnh,b.name as brand ,a.XuatXu,a.Gia,c.id  as type  FROM tbl_acesstory a
                    JOIN tbl_catagorise c ON c.id = a.LoaiSp
                    JOIN tbl_brand b ON b.id = a.BrandId
                    GROUP BY a.TenSp";
                    
                 if( $typevalue!= ""||  $brandvalue!="" || !empty($_GET["sort"]) || !empty($_GET["search"]) || !empty($_GET["price"])){
                    $sql = "SELECT a.ID, a.TenSp as name ,a.HinhAnh,b.name as brand ,a.XuatXu,a.Gia,c.id  as type  FROM tbl_acesstory a
                    JOIN tbl_catagorise c ON c.id = a.LoaiSp
                    JOIN tbl_brand b ON b.id = a.BrandId
                    $conditional
                    GROUP BY a.TenSp";      
                 }          
                
                $result =mysqli_query($conn,$sql);
                $number_of_result = mysqli_num_rows($result);
               
                $number_of_page = ceil($number_of_result / $results_per_page);
                //ceil làm tròn
                if (!isset ($_GET["page"]) ) {

                    $page = 1;
                    
                    } else {
                    
                    $page = $_GET["page"];
                    
                    }
                    $page_first_result = ($page-1) * $results_per_page;
                    $sql = "SELECT a.ID, a.TenSp as name ,a.HinhAnh,b.name as brand ,a.XuatXu,a.Gia,c.id  as type  FROM tbl_acesstory a
                    JOIN tbl_catagorise c ON c.id = a.LoaiSp
                    JOIN tbl_brand b ON b.id = a.BrandId
                    GROUP BY a.TenSp
                    LIMIT ". $page_first_result . "," . $results_per_page;
                 if( $typevalue!= ""||  $brandvalue!="" || !empty($_GET["sort"]) || $search || !empty($_GET["price"])){
                    $sql = "SELECT a.ID, a.TenSp as name ,a.HinhAnh,b.name as brand ,a.XuatXu,a.Gia,c.id  as type  FROM tbl_acesstory a
                    JOIN tbl_catagorise c ON c.id = a.LoaiSp
                    JOIN tbl_brand b ON b.id = a.BrandId
                    $conditional
                    GROUP BY a.TenSp ".$order."
                     LIMIT ". $page_first_result . "," . $results_per_page
                    ;      
                 }            
                   
                    $acesstory = mysqli_query($conn,$sql);
                    while($row = mysqli_fetch_assoc($acesstory)){
                        echo '<div class="car-paper">    ';
                        echo '<div class="car-img2" style="background-image: url('.$row["HinhAnh"].');"></div>';
                        echo ' <h4 class="car-name">'.$row["name"].'</h4>';
                        echo '<h4 class="price" style="color: red">'.currency_format($row["Gia"]).'</h4>';
                        echo ' <div class="container-concept">';
                             echo ' <div class="concept-content">';
                                echo '<div class="concept">thương hiệu:</div>';
                                echo ' <div class="value">'.$row["brand"].'</div>';
                            echo ' </div>'; 
                             
                            echo '<div class="concept-content">';
                                echo '<div class="concept">xuất xứ:</div>';
                                echo '<div class="value">'.$row["XuatXu"].'</div>';
                            echo '</div>';
                        echo '</div>';
                        echo ' <a href="http://localhost/solar2/carShop/AcesstoryDetail/index.php" class="btn btn-contain btn-buy">xem chi tiết</a>';
                        echo ' </div>';
                    }
                   
                ?>        
        </div>
      
      <div class="pagination-container">
            <?php 

                for($page = 1; $page<= $number_of_page; $page++) {
                    
                    
                    if(isset($_GET["page"]) && $_GET["page"] == $page ){
                        $_active = "page-active";
                    }else $_active ="";
                      $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                      if( $typevalue!= ""||  $brandvalue!="" || isset($_GET["sort"]) || $search || isset($_GET["price"])){
                        if(isset($_GET["page"])){
                           $actual_link=substr($actual_link , 0, -1);
                           
                             echo '<a class="'. $_active.'" href = "'.$actual_link.''.$page.'">'.$page .'</a>';
                        }
                        else echo '<a  class="'. $_active.'" href = "'.$actual_link.'&page='.$page.'">'.$page .'</a>';
    
                      }else echo  '<a  class="'. $_active.'" href = "index.php?page='.$page.'">'.$page .'</a>';
                    }
             ?>
      </div>
   
       
      </div>
    </div>

</body>
</html>
<?php
    ob_flush();
?>