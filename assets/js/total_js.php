<?php
header("Content-type: text/script");
$total_js = $_GET['load_check'];
$_total_js = sha1(date('d m A s i'));

if($total_js == $_total_js){
?>


<?php include_once  'jquery-3.2.1.min.js' ?>
<?php include_once  'plugins.js' ?>

<?php include_once  'Popper.js' ?>  
<?php include_once  'bootstrap.min.js' ?>  
<?php include_once  'jquery.magnific-popup.min.js' ?>  
<?php include_once  'owl.carousel.min.js' ?>  
<?php include_once  'tweetie.js' ?>  
<?php include_once  'jquery.parallax-scroll.js' ?>  

<?php include_once  'jquery.ajaxchimp.min.js' ?>  
<?php include_once  'jquery.parallax.js' ?>  
<?php include_once  'hostslide.js' ?>  
<?php include_once  'jquery-ui.min.js' ?>  
<?php include_once  'vps-slider.js' ?>
<?php include_once  'vps-slider-settings.js' ?>
<?php include_once  'main.js' ?>  

<?php
}
