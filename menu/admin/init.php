<?php
include 'connect.php';
//routes
$tpl ='includes/templates/'; //template Directory
// $func 'includes/function/'; //function directory
$func ='includes/functions/';
$css ='layout/css/'; //css directory
$js ='layout/js/'; //js directory


//include important files
// include $func . 'function.php';
include $func  .  'functions.php';
include $tpl  .  'header.php';
// include $tpl  .  'nav.php';





 //include navbar all page expect the one withe $nonavbar variable
//  include $tpl .'nav.php';
// if(!isset($noNavbar)){
//     include $tpl .'nav.php';
// }
