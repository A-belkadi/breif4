<?php

$servername="localhost";
$username="root";
$password="";
$dbname="patient_db2";

$conn=mysqli_connect($servername,$username,$password,$dbname);

if(isset($_GET["id"])){
    $ids=$_GET["id"];
    $sql="DELETE FROM gestion WHERE id = $ids";

    mysqli_query($conn,$sql);
    
    header("location:gestion.php");
}
?>