<?php
header("Content-type: text/css");
$style = $_GET['load_check'];
$_style = sha1(date('d m A s i'));

if($style == $_style){
?>


<?php include_once  'font-awesome.min.css' ?>
<?php include_once  'bootstrap.min.css' ?>
<?php include_once  'animate.css' ?>  
<?php include_once  'iconfont.css' ?> 
<?php include_once  'magnific-popup.css' ?>  
<?php include_once  'owl.carousel.min.css' ?>  
<?php include_once  'owl.theme.default.min.css' ?>  
<?php include_once  'jquery-ui.structure.min.css' ?>  
<?php include_once  'jquery-ui.theme.min.css' ?>  
<?php include_once  'plugins.css' ?>  
<?php include_once  'style.css' ?>  
<?php include_once  'responsive.css' ?>    


<?php
}
