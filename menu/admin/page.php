<?php
 
// categorie [MANAGE . EDITE . UPDATE . ADD . INSERT . DELETE . STATS]

$do ='';
$do = isset($_GET['do']) ? $_GET['do'] :'Manage';
// if(isset($_GET['do'])){
 
//  $do =  $_GET['do'];


// } else {

//     $do = 'Manage';
// }

// Main page

if($do == 'Manage'){

    // echo 'welcome  Manage page';
    echo '<a href="page.php?do=Add">Add New category +</a>';

    
} elseif ($do == 'Add') {

    // echo 'welcome Add page';

} elseif ($do == 'Insert') {

    // echo 'welcome Insert page';

} else {
    echo'Error';
}