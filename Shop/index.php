<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <style type="text/css">
         <?php include "../Assets/css/main.css"?>
        <?php include "../Layout/Header/header.css"?>
        <?php include "../Shop/shop.css" ?>
   </style>
</head>
<body>
    
<?php 

$page ="shop";
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
                <h2>Kiểu dáng</h2>
                <?php 
                    $conn = mysqli_connect('localhost','root','','db_solarflare');
                    $sql = "SELECT * FROM `tbl_model` ";
                    $model = mysqli_query($conn,$sql);
                    
                    while($row = mysqli_fetch_assoc($model)){
                        $checked = "";
                        if(isset($_GET["model"])){
                            if(in_array($row["id"], $_GET["model"])){
                                $checked = "checked";
                            }
                        }
                        
                        echo '<div>';
                        echo '<input type="checkbox" '.$checked .' class="checkbox" value="'.$row["id"].'" name="model[]" >';
                        echo '<label for="model[]">'.$row["name"].'</label>';
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
                <option value="1" <?php if($price  == "1") echo"selected" ?> >Dưới 300 triệu</option>
                <option value="2" <?php if($price  == "2") echo"selected" ?> >300 triệu đến 500 triệu</option>
                <option value="3" <?php if($price  == "3") echo"selected" ?> >500 triệu đến 1 tỷ </option>
                <option value="4" <?php if($price  == "4") echo"selected" ?> >1 tỷ đến 2tỷ </option>
                <option value="5" <?php if($price  == "5") echo"selected" ?> >trên 3 tỷ</option>
                
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
               $modelvalue="";
                if(isset($_GET["model"])){
                   
                    $model =$_GET["model"];
                    $modelvalue=$model[0];
                    for($i=1;$i<count($model);$i++){
                        $modelvalue =$modelvalue.",".$model[$i];
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
                        $priceValue = " c.price < 300000000";
                        break;
                        case 2:
                            $priceValue = " c.price BETWEEN 300000000 AND 500000000";
                        break;
                        case 3:
                            $priceValue = " c.price BETWEEN 500000000 AND 1000000000";
                        break;
                        case 4:
                            $priceValue = " c.price BETWEEN 1000000000 AND 2000000000";
                        break;
                        case 5:
                            $priceValue = " c.price > 3000000000";
                        break;
                        default: $priceValue ="";
                        }
                }
             
                $conditional ="";
                if(isset($_GET["model"])){
                    if(strcmp($conditional,"where")==0){
                        $conditional = $conditional."where m.id in ($modelvalue)";
                    }else $conditional =$conditional." and m.id in ($modelvalue)";                  
                }
                if(isset($_GET["brand"])){
                    if(strcmp($conditional,"where")==0){
                        $conditional = $conditional."where b.id in ($brandvalue)";
                    }else $conditional =$conditional." and b.id in ($brandvalue)";   
                }

               //tìm kiếm theo tên 
                if(isset($_GET["search"]) && !empty($_GET["search"])){
                    if(strcmp($conditional,"where")==0){
                        $conditional = $conditional."where c.name like '%".$_GET["search"]."%'";
                    }else $conditional =$conditional." and c.name like '%".$_GET["search"]."%'";  
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
                    $order = "ORDER BY c.price ".$_GET["sort"];
                }
                //xử lý phân trang 
                $results_per_page = 6;
                $sql = "SELECT c.name as name ,c.imgurl,b.name as brand ,c.seats,c.country,c.price,m.name  as model  FROM tbl_car c
                    JOIN tbl_model m ON m.id = c.modelId
                    JOIN tbl_brand b ON b.id = c.brandId
                    GROUP BY c.name";
                    
                 if( $modelvalue!= ""||  $brandvalue!="" || !empty($_GET["sort"]) || !empty($_GET["search"]) || !empty($_GET["price"])){
                    $sql = "SELECT c.name as name ,c.imgurl,b.name as brand ,c.seats,c.country,c.price,m.name as model FROM tbl_car c
                    JOIN tbl_model m ON m.id = c.modelId
                    JOIN tbl_brand b ON b.id = c.brandId
                    $conditional
                    GROUP BY c.name ";      
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
                $sql = "SELECT c.name as name ,c.imgurl,b.name as brand ,c.seats,c.country,c.price,m.name  as model  FROM tbl_car c
                    JOIN tbl_model m ON m.id = c.modelId
                    JOIN tbl_brand b ON b.id = c.brandId
                   
                    GROUP BY c.name
                    LIMIT ". $page_first_result . "," . $results_per_page;
                 if( $modelvalue!= ""||  $brandvalue!="" || !empty($_GET["sort"]) || $search || !empty($_GET["price"])){
                    $sql = "SELECT c.name as name ,c.imgurl,b.name as brand ,c.seats,c.country,c.price,m.name as model FROM tbl_car c
                    JOIN tbl_model m ON m.id = c.modelId
                    JOIN tbl_brand b ON b.id = c.brandId
                    $conditional
                    GROUP BY c.name ".$order."
                     LIMIT ". $page_first_result . "," . $results_per_page
                    ;      
                 }            
                   
                    $car = mysqli_query($conn,$sql);
                    while($row = mysqli_fetch_assoc($car)){
                        echo '<div class="car-paper">    ';
                        echo '<div class="car-img2" style="background-image: url('.$row["imgurl"].');"></div>';
                        echo ' <h4 class="car-name">'.$row["name"].'</h4>';
                        echo '<h4 class="price" style="color: red">'.currency_format($row["price"]).'</h4>';
                        echo ' <div class="container-concept">';
                             echo ' <div class="concept-content">';
                                echo '<div class="concept">thương hiệu:</div>';
                                echo ' <div class="value">'.$row["brand"].'</div>';
                            echo ' </div>'; 
                            echo '<div class="concept-content">';
                                echo ' <div class="concept">Kiểu Dáng:</div>';
                                echo '<div class="value">'.$row["model"].'</div>';
                            echo '</div>  ';
                        echo'</div>';
                        echo '<div class="container-concept">';
                            echo '  <div class="concept-content">';
                                echo '<div class="concept">Chỗ Ngồi:</div>';
                                echo ' <div class="value">'.$row["seats"].' chỗ</div>';
                            echo '</div>';  
                            echo '<div class="concept-content">';
                                echo '<div class="concept">xuất xứ:</div>';
                                echo '<div class="value">'.$row["country"].'</div>';
                            echo '</div>';
                        echo '</div>';
                        echo ' <a href="" class="btn btn-contain btn-buy">Mua </a>';
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
                      if( $modelvalue!= ""||  $brandvalue!="" || isset($_GET["sort"]) || $search || isset($_GET["price"])){
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