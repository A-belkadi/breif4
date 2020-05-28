<?php
$servername="localhost";
$username="root";
$password="";
$dbname="patient_db2";

$conn=mysqli_connect($servername,$username,$password,$dbname);
//aficher les donnée pour faire une modification
if (isset($_GET["id"])){
    $idm=$_GET["id"];
    $sql="SELECT * FROM gestion WHERE id =$idm";
    $result=mysqli_query($conn,$sql);

    $row=mysqli_fetch_assoc($result);


    $id=$row["id"];
    $nom=$row["nom"];
    $description=$row["description"];
    $prix=$row["prix"];
    $qte=$row["qte"];
}
//la requet de modification
if(isset($_POST["modifier"])){
    
    $id=$_POST["id"];
    $nom=$_POST["nom"];
    $description=$_POST["description"];
    $prix=(int)$_POST["prix"];
    $qte=(int)$_POST["qte"];
    $sql="UPDATE gestion SET nom = '$nom', description = '$description', prix = '$prix', qte = $qte WHERE id = '$id';";
    // $sql="UPDATE `gestion` SET `nom` = $nom, `description` = $description, `prix` = $prix, `qte` = $qte WHERE `gestion`.`id` = $id;";
        // UPDATE `gestion` SET `nom` = $nom, `description` = $description, `prix` = $prix, `qte` = $qte WHERE `gestion`.`id` = $id;
      mysqli_query($conn,$sql);
  header("location:gestion.php");
}

?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="./layout/css/backend.css">


</head>
<div class="ges"> 
  <h1> GESTION DE STOCK</h1>
</div>
<body>
<form action="#" method="POST">
<input type="hidden" name="id" value="<?php echo $id ?>">

<label >Nom de produit</label><br>
<input class="frm" type="text" name="nom" value="<?php echo $nom; ?>">
<br>
<br>
<label>Description de produit</label><br>
<input class="frm" type="text" name="description" value="<?php echo $description; ?>">
<br>
<br>
<label>Prix de produit</label><br>
<input class="frm" type="text" name="prix" value="<?php echo $prix; ?>">
<br>
<br>
<label>Qte de produit</label><br>
<input  class="frm" type="text" name="qte" value="<?php echo $qte; ?>">
<br>
<br>
<input  class="ajouter" type="submit" name="modifier" value="modifier">
</form>
</body>
</html>
