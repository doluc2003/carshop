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
   <style>
         <?php include "../../carShop/Assets/css/main.css"?>
        <?php include "../Layout/Header/header.css"?>
        <?php include "../../carShop/LandingPage/Landingpage.css" ?>
        <?php include "../Layout/Footer/footer.css"?>
   </style>
</head>
<body>
    <?php 
        $page ="Home";
        require "../Layout/Header/index.php";       
    ?>
    <!-- start banner -->
    <div class="home-container">
        <div class="banner">
        <div class="banner-left">
             <p class="banner-subheader">Chào mừng bạn đến với SolarFlare</p>
             <h2 class="banner-title">Khám phá thế giới xe hơi cùng chúng tôi 
                 </h2>
             <p class="banner-decription">Chào mừng bạn đến với trang web chuyên biệt trong việc đáp ứng tất cả nhu cầu của bạn về xe hơi. 
                Tại đây, chúng tôi tự hào giới thiệu một bộ sưu tập đa dạng các loại xe từ các hãng uy tín trên toàn thế giới, 
                cùng với dịch vụ chất lượng và thông tin cần thiết để bạn có thể thực hiện một quyết định mua xe thông minh.
            </p>
            <div class="btn-group">
                <a class="btn btn-contain">Mua xe ngay</a>
                <a class="btn btn-outline">Mua linh kiện</a>
            </div>
        </div>
        <div class="banner-right">
            <img class="banner-right-img" src="../Assets/img/car.png" alt="">
        </div>
        </div>
    
    </div>
    <!-- end banner -->
       <!-- Start car list -->
       <div class="car-list">
                <h2 class="banner-title" style="text-align: center;">Top xe bán chạy nhất </h2>
                <div class="divider" style="margin:1rem auto"></div>
                <div class="divider" style="width:7rem ;margin:1rem auto"></div>
                
                <div class="catagorise">
                    <div class="Brand-chip">
                        <img class="brand-icon" src="../Assets/img/Honda.png" alt="">
                        <div>Honda</div>
                    </div>
                    <div class="Brand-chip">
                        <img class="brand-icon" src="../Assets/img/toyota_logo_icon_249373.png" alt="">
                        <div>Toyota</div>
                    </div>
                    <div class="Brand-chip">
                        <img class="brand-icon" src="../Assets/img/nissan_logo_icon_248364.png" alt="">
                        <div>Nissan</div>
                    </div>
                    <div class="Brand-chip">
                        <img class="brand-icon" src="../Assets/img/mazda_logo_icon_145801.png" alt="">
                        <div>Mazda</div>
                    </div>
                    <div class="Brand-chip">
                        <img class="brand-icon" src="../Assets/img/audi_logo_icon_247535.png" alt="">
                        <div>Audi</div>
                    </div>
                </div>
                <div class="car-grid">
                    <div class="car-paper">                       
                            <div class="car-img2" style='background-image: url("../Assets/img/1be5274f950e1a3efe42894675f002cc.jpg");'></div>                        
                            <h4 class="car-name">CAMRY 2.5Q</h4>
                            <h4 class="price" >
                            <span class="concept">giá từ:</span>
                            <span style="color: red" class="value">1.405.000.000 vnđ</span>
                            </h4>
                            <div class="container-concept">
                                <div class="concept-content">
                                    <span class="concept">thương hiệu:</span>
                                    <span class="value">Toyota</span>
                                </div>
                                <div class="concept-content">
                                    <span class="concept">Kiểu Dáng:</span>
                                    <span class="value">sedan</span>
                                </div>                            
                            </div>
                            <div class="container-concept">
                            <div class="concept-content">
                                    <span class="concept">Chỗ Ngồi:</span>
                                    <span class="value">5</span>
                                </div>                            
                                <div class="concept-content">
                                    <span class="concept">xuất xứ:</span>
                                    <span class="value">Indonecia</span>
                                </div>
                                
                            </div>                         
                            <a href="" class="btn btn-contain btn-buy">Mua </a>
                    </div>
                    <div class="car-paper">                       
                            <div class="car-img2" style='background-image: url("../Assets/img/1be5274f950e1a3efe42894675f002cc.jpg");'></div>                        
                            <h4 class="car-name">CAMRY 2.5Q</h4>
                            <h4 class="price" >
                            <span class="concept">giá từ:</span>
                            <span style="color: red" class="value">1.405.000.000 vnđ</span>
                            </h4>
                            <div class="container-concept">
                                <div class="concept-content">
                                    <span class="concept">thương hiệu:</span>
                                    <span class="value">Toyota</span>
                                </div>
                                <div class="concept-content">
                                    <span class="concept">Kiểu Dáng:</span>
                                    <span class="value">sedan</span>
                                </div>                            
                            </div>
                            <div class="container-concept">
                            <div class="concept-content">
                                    <span class="concept">Chỗ Ngồi:</span>
                                    <span class="value">5</span>
                                </div>                            
                                <div class="concept-content">
                                    <span class="concept">xuất xứ:</span>
                                    <span class="value">Indonecia</span>
                                </div>
                                
                            </div>                         
                            <a href="" class="btn btn-contain btn-buy">Mua </a>
                    </div>
                    <div class="car-paper">                       
                            <div class="car-img2" style='background-image: url("../Assets/img/1be5274f950e1a3efe42894675f002cc.jpg");'></div>                        
                            <h4 class="car-name">CAMRY 2.5Q</h4>
                            <h4 class="price" >
                            <span class="concept">giá từ:</span>
                            <span style="color: red" class="value">1.405.000.000 vnđ</span>
                            </h4>
                            <div class="container-concept">
                                <div class="concept-content">
                                    <span class="concept">thương hiệu:</span>
                                    <span class="value">Toyota</span>
                                </div>
                                <div class="concept-content">
                                    <span class="concept">Kiểu Dáng:</span>
                                    <span class="value">sedan</span>
                                </div>                            
                            </div>
                            <div class="container-concept">
                            <div class="concept-content">
                                    <span class="concept">Chỗ Ngồi:</span>
                                    <span class="value">5</span>
                                </div>                            
                                <div class="concept-content">
                                    <span class="concept">xuất xứ:</span>
                                    <span class="value">Indonecia</span>
                                </div>
                                
                            </div>                         
                            <a href="" class="btn btn-contain btn-buy">Mua </a>
                    </div>
                    
                </div>
    </div>
    <!-- end carList -->
    <!-- mainFeature -->
    <div class="aboutus-wapper">
        <div class="abousus-container">
        <div class="aboutus-left">
                <img src="../Assets/img/Land Prado-Do-3R3.png" class="img-aubotUs" alt="">
        </div>
        <div class="aboutus-right">
            <h2 style="color:red">Về chúng tôi</h2>
            <h1 class="banner-title">Chúng tôi luôn đặt lợi ích của khách hàng lên hàng đầu</h1>
            <div class="divider" style="width:7rem"></div>
            <div class="divider"></div>
            <p class="aboutus-decription">SolarFare là một cửa hàng showroom ô tô tại địa điểm của chúng tôi. 
                Chúng tôi tự hào là địa điểm hàng đầu cho những người yêu đam mê ô tô 
                và đang tìm kiếm những chiếc xe hàng đầu và dịch vụ tốt nhất. Tại SolarFare,
                 chúng tôi cam kết cung cấp những sản phẩm và dịch vụ chất lượng cao, đáp ứng mọi nhu cầu của khách hàng.
            </p>
            <p class="aboutus-decription">
            Tầm nhìn của chúng tôi là trở thành một trong những showroom ô tô hàng đầu, 
            được biết đến với sự xuất sắc trong việc cung cấp các dòng xe solar và những sản phẩm liên quan.
             Chúng tôi luôn nỗ lực để đáp ứng các tiêu chuẩn cao nhất trong ngành và tạo ra trải nghiệm mua sắm độc đáo cho khách hàng của mình.
            </p>
        </div> 
        </div>
    </div>
 
    <div class="news-wapper">
        <h2 class="banner-title" style="text-align: center;">Tin Tức & sự kiện </h2>
        <div class="divider" style="margin:1rem auto"></div>
        <div class="divider" style="width:7rem ;margin:1rem auto"></div>
                
        <div class="new-list">
                <div  class="new-item">
                    <div class="new-item-img" style='background-image: url("../Assets/img/1be5274f950e1a3efe42894675f002cc.jpg");' >
                        <span class="new-item-time">
                            26/9/2023
                        </span>
                         </div>      
                    <div class="new-title">Toyota Việt Nam chính thức giới thiệu Toyota Yaris Cross hoàn toàn mới </div>  
                    <a class="new-link" href="">Tìm hiểu thêm</a>
                </div>
                <div  class="new-item">
                    <div class="new-item-img" style='background-image: url("../Assets/img/466B91013467AEE8C6DC6E14B5F99436.jpg");' >
                        <span class="new-item-time">
                            26/9/2023
                        </span>
                         </div>      
                    <div class="new-title">Toyota Việt Nam chính thức giới thiệu Toyota Yaris Cross hoàn toàn mới </div>  
                    <a class="new-link" href="">Tìm hiểu thêm</a>
                </div>
                <div  class="new-item">
                    <div class="new-item-img" style='background-image: url("../Assets/img/apple-carplay.jpeg");' >
                        <span class="new-item-time">
                            26/9/2023
                        </span>
                         </div>      
                    <div class="new-title">Toyota Việt Nam chính thức giới thiệu Toyota Yaris Cross hoàn toàn mới </div>  
                    <a class="new-link" href="">Tìm hiểu thêm</a>
                </div>
               
        </div>
    </div>
    <!-- end news -->
        <?php 
        require "../Layout/Footer/index.php";       
    ?>
</body>
</html>