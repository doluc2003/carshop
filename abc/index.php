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
  
    <script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
    <style>
         <?php include "../../carShop/Assets/css/main.css"?>
         <?php include "../Layout/Header/header.css"?>
         
    </style>
</head>
<body>
<?php 
        $page ="Home";
        require "../Layout/Header/index.php";       
    ?>
    <br>
    <br><br>
    <br><br><br><br>
     <textarea name="editor1"></textarea>
    <script>
                        CKEDITOR.replace( 'editor1' );
    </script>
</body>
</html>