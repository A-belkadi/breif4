<?php





function getTittle() {

     global $pageTittle;
     
     if (isset($pageTittle)) {

        echo $pageTittle;

     } else {

        echo 'Default';
     }

}


// Redirect To page dashbord before seconds

function redirectHome($theMsg, $url = null, $seconds = 3){

      if ($url === null){

         $url = 'index.php';

      } else {

         if (isset($_SERVER['HTTP_REFERER']) && $_SERVER['HTTP_REFERER'] !== ''){

            $url = $_SERVER['HTTP_REFERER'];

         } else {

            $url ='index.php';
         }

        
      }

      echo $theMsg;

   echo "<div class='alert alert-info'>YOU WILL BE REDIRECTED TO HOMEPAGE AFTER $seconds seconds.</div>";

   header("refresh:$seconds;url=$url");

   exit();
}


// function check Item in DataBase 

function checkItem ($select, $from, $value){

   global $db;

   $statement = $db->prepare("SELECT  $select FROM $from WHERE $select = ?");

   $statement->execute(array($value));

   $count = $statement->rowCount();

return $count;
}

// count number of items

function countItems  ($item, $table){

   global $db;

   $stmt2 =$db->prepare("SELECT COUNT($item) FROM $table");

   $stmt2->execute();
   
  return $stmt2->fetchColumn();


}
function getLatest($select , $table, $order, $limit = 5){

   global $db;

   $getStmt = $db->prepare("SELECT $select FROM $table ORDER BY $order DESC LIMIT $limit");

   $getStmt->execute();

   $rows = $getStmt->fetchAll();

   return $rows;


}




