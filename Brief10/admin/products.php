<?php
session_start();

if (isset($_SESSION['username']) || isset($_SESSION['user'])) {

    $pagetitle = 'products';
    include "init.php"; // include init

    $do = isset($_GET['do']) ? $_GET['do'] : 'welcome';

    if ($do == 'welcome') {

        $stmt = $db->prepare("SELECT * FROM products");
        $stmt->execute(array());

        $rows = $stmt->fetchAll();

?>

        <div class="container product-container">
            <?php foreach ($rows as $row) {
            ?>
                <div class="product-parent-div">
                    <div class="product-div">
                        <div class="img-product">
                            <img src="layout/images/<?php echo $row['name'] ?>.png" alt="">
                        </div>
                        <div class="info-product">
                            <div class="details">
                                <div class="name-product">
                                    <h3><?php echo $row['name'] ?></h3>
                                </div>
                                <div class="description-product">
                                    <h6><?php echo $row['description'] ?></h6>
                                </div>
                            </div>
                            <div class="price-product">
                                <h4><span class="Prix"> <?php echo $row['price'] ?> </span> DH</h4>
                            </div>
                        </div>
                    </div>
                    <a class="btn btn-success" style="color:white;"> 
                        <input style="height:15px;width:40px;padding:6px;" type="checkbox" name="produit" id="<?php echo $row['id']?>" > Ajouter au panier
                    </a>
                </div>
            <?php } ?>
        </div>
        <br><br>

        <p style="text-align:center;">
        <button id="btnConsulter" onclick="Panier()" name="Consulter" style="width:200px;height:50px;border-style:none;text-align:center;background-color:green;color:white;font-size:20px;border-radius:25px"> Calculer le total </button>

        <br><br>

        <p id ="Totalprix" style="text-align:center; color:red; font-weight:bold;"> </p>
        <br> 

        <!-- Button confirmer Modal -->
        <p style="text-align:center; display:none;"  id="confirmer"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Confirmer
        </button></p>

        <!-- Modal -->
        <form method="POST" >
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Confirmation de la demande</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <span class="form-control" id="nom" disabled><?php echo $_SESSION['user'] ?></span><br>
                    <input type="text" id="FormPrix" name="prixTotal" class="form-control"><br> 
                    <input type="text" class="form-control" name="CIN" id="CIN" placeholder="Entrez votre CIN"> <br>

                    <select class="form-control" id="methodeP" name="methodeP">
                        <option value="" selected disabled hidden> Choisir méthode de paiement </option>
                        <option value="CarteBanquaire"> Carte banquaire </option>
                        <option value="Especes"> Paiement à la livraison </option>
                    </select><br>
                    <input  style="display:none;" type="text" class="form-control" id="code" placeholder="Entrez le code de votre Carte"> <br>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                    <input type="submit"  name="Valider" class="btn btn-primary" value="Confirmer">
                </div>
                </div>
            </div>
            </div>
        </form>

        <?php   
        if(isset($_POST['Valider']) && isset($_POST['prixTotal'])  ){

            
                include 'connect.php';
                global $db;
                $stmt = $db->prepare('INSERT INTO commande(cmdDate,cmdPrice,MethodePaiement,userID) VALUES (CURTIME(),?,?,?)');
                $stmt->execute(array(
                    $_POST['prixTotal'],
                    $_POST['methodeP'],
                    $_SESSION['id']
                ));

                $stmt2 = $db->prepare("UPDATE users SET CIN=?  WHERE userID=?");
                $stmt2->execute(array(
                    $_POST['CIN'],
                    $_SESSION['id']
                )); 

                ?>
                <p style="text-align:center; font-size:20px;color:red;">
                <?php  
                    echo "Demande effectuée !";
                ?> 
                </p>
                <?php    
        }    
        ?>

        <?php
        } 
         include $tplDirName . "footer.php";
        } else {
            header('location: index.php');
        }
        ?>




        <script>
            function Panier(){
                var produit = document.getElementsByName('produit');
                var produitSelect =[];
                var j=0;
                var prix = document.getElementsByClassName('Prix');
                var Totalprix = document.getElementById('Totalprix');
                var Somme=0;
                var select = document.getElementById('methodeP');

                for (var i=0;i<produit.length;i++)
                {
                    if(produit[i].checked)
                    {
                        produitSelect[j]=produit[i].id;
                        j++;
                        Somme += Number(prix[i].innerHTML);   
                    }
                }
                Totalprix.innerText = "Le prix total est : "+ Somme + "DHS";
                document.getElementById("confirmer").style.display = "block";
                document.getElementById('FormPrix').innerText += Somme +" DHS";
                document.getElementById('FormPrix').value= Somme;
                Totalprix.value= Somme;

                document.getElementById('methodeP').addEventListener('change', function (e) {
                if (e.target.value === "CarteBanquaire") {
                    document.getElementById('code').style.display ="block";
                }else{
                    document.getElementById('code').style.display ="none";
                }
                });
             
            }
        </script>
            