<?php

$servername="localhost";
$username="root";
$password="";
$dbname="patient_db2";

$conn=mysqli_connect($servername,$username,$password,$dbname);

$query="SELECT * FROM gestion";

$result=mysqli_query($conn,$query);

if(isset($_POST["ajouter"])){
    // echo"string";
    $nom=$_POST["nom"];
    $description=$_POST["description"];
    $prix=$_POST["prix"];
    $qte=$_POST["qte"];
    $sql="INSERT INTO gestion (nom,description,prix,qte) VALUES('$nom','$description','$prix','$qte')";
    mysqli_query($conn,$sql);
}

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./layout/css/backend.css">
    <!-- <link rel="shortcut icon" type="image/x-icon" href="img/icn.png" /> -->
    <title>Formateur</title>
</head>
<div class="ges"> 
  <h1> GESTION DE STOCK</h1>
</div>
<body>
<form  classe="form" action="gestion.php" method="post">
    
<label>Nom de produit</label><br>
<input class="frm" type="text" name="nom">
<br>
<br>
<label>Description de produit</label><br>
<input  class="frm" type="text" name="description">
<br>
<br>
<label>Prix de produit</label><br>
<input class="frm" type="text" name="prix">
<br>
<br>
<label>Qte de produit</label><br>
<input class="frm" type="text" name="qte">
<br>
<br >

<input class="ajouter"  type="submit" name="ajouter" value="ajouter">
</form>
  

<table>
<!-- <th >id</th> -->
<th>Nom de produit</th><br>
<th>Description de produit</th>
<th>Prix de produit</th>
<th>Quantité de produit</th>
<th class="df">Modification</th>
<th class="sp"> Suppression</th>



<?php
$sql= "select * from gestion";
$result = mysqli_query($conn,$sql);

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>"
//    . $row["id"], "</td><td>"
   . $row["nom"], "</td><td>"
   . $row["description"],"</td><td>"
   . $row["prix"],"</td><td>"
   . $row["qte"], "</td><td>"
    ."<td><a href='modifier_gestion.php?id=",$row["id"],"'>modifier<a></td>"
   ."<td><a href='supprimer_gestion.php?id=",$row["id"],"'>supprimer<a></td>";

}
?>



</body>
</html>
