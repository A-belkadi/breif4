<?php 

session_start();

$pageTitle = 'menu';

    if (isset($_SESSION['Username'])){


        include 'init.php';

        $do = isset($_GET['do']) ? $_GET['do'] : 'Manage';

        if($do == 'Manage'){


         $stmt2 = $db->prepare("SELECT * FROM menu");

         $stmt2->execute();

         $cats = $stmt2->fetchAll(); ?>

         <h1 class="text-center">Manage Menu</h1>
         <div class="container menu">
            <div class="card card-default">
                <h4 class="card-header">Manage Menu</h4>
                <div class="card-body">
                    <?php 
                        foreach($cats as $cat){
                            
                            echo "<div class='cat'>";
                            
                            echo "<div class='hidden-buttons'>";
                            echo "</div>";
                            echo "<h3>"  .$cat['Name'] . '</h3>';
                         
                        echo "</div>";
                            echo "<a  href='menu.php?do=Edit&catid=" . $cat['ID'] . "' class='btn btn-xs btn-edit' data-toggle='tooltip' data-placement='top' title='Edit'><i class='fa fa-edit'></i></a>";
                            echo "<a  href='menu.php?do=Delete&catid=" .$cat['ID'] . "' class='confirm btn btn-xs btn-delete' data-toggle='tooltip' data-placement='top' title='Delete'><i class='fa fa-close'></i></a>";

                          
                        }
                        ?>

                </div>
            </div>
                    <a class="btn btn-add" href="menu.php?do=Add"><i class="fa fa-plus"></i>Add New Menu</a>
         </div>

         <?php

        } elseif ($do == 'Add'){ ?>

<h1 class="text-center">Add New Menu </h1>

<div class="container">
    <form class="form-horizontal" action="?do=Insert" method="POST">
        <div class="form-group form-groupe-lg">
            <label class="col-sm-2 control-label">Name</label>
            <div class="col-sm-10 col-md-10">
                <input type="text" name="name" class="form-control"  required="required"/>
            </div>
        </div>

      

        <div class="form-group form-groupe-lg">
            <div class=" col-sm-offset-2 col-sm-10 ">
                <input type="submit" value="Add Menu" class="btn btn-primary"/>
            </div>
        </div>

    </form>

</div>




                <?php

        } elseif ($do == 'Insert') {

        if ($_SERVER['REQUEST_METHOD'] == 'POST'){

            echo   "<h1 class='text-center'>Insert Menu</h1>";
            echo   "<div class='container'>";
            
    
            $name       =$_POST['name'];
         
        
    
                    // check if User exist in Database

                $check = checkItem("Name", "menu",   $name);

                if($check == 1) {

                    echo "<div class='container'>";

                    $theMsg = ' <div class = "alert alert-danger">sorry this Categorie is Exist</div>';
         
                     redirectHome($theMsg, 'back');


                } else {
            
                //UPDATE Dans DataBase
                
                
                        $stmt =$db->prepare("INSERT INTO menu (Name)VALUES(:zname)");
                        $stmt->execute(array(

                            'zname' => $name,
                         

                        ));
                        
                        //Echo Seccess Message
                        
                        
                      $theMsg = "<div class='alert alert-success'>" . $stmt->rowCount() . ' Record Inserted</div>';
                    
                        redirectHome($theMsg, 'back', 3);

                    }     
          

        
        }else {

            echo "<div class ='container'>";
        
           $theMsg ='<div class=" alert alert-danger">Sorry you cant browse this Page Directly  </div>';
         
            redirectHome($theMsg, 'back');

            echo "</div>";
        }
        
        echo "</div>"; 

        } elseif ($do == 'Edit'){

            
            // il y'a un nomber afficher si non afficher false
            $catid =  isset($_GET['catid']) && is_numeric($_GET['catid']) ? intval($_GET['catid']):0;

            // select id from data pour afficher

            $stmt = $db->prepare("SELECT * FROM menu WHERE ID = ? ");

            // l'execution

            $stmt->execute(array($catid));

            // fetch dans Data

            $cat = $stmt ->fetch();

            //  su il y'a un changment ou nn 

            $count = $stmt->rowCount();

            // il y'a un value dans database > 0 afficher

        if($stmt->rowCount() > 0){  ?>



         
<h1 class="text-center">Edit Menu </h1>

<div class="container">
    <form class="form-horizontal" action="?do=Update" method="POST">
    <input type="hidden" name="catid" value=" <?php  echo  $catid ?>"/>

        <div class="form-group form-groupe-lg">
            <label class="col-sm-2 control-label">Name</label>
            <div class="col-sm-10 col-md-10">
                <input type="text" name="name" class="form-control"  required="required"  value="<?php echo $cat['Name']?>"/>
            </div>
        </div>

        

        <div class="form-group form-groupe-lg">
            <div class=" col-sm-offset-2 col-sm-10 ">
                <input type="submit" value="Add Menu" class="btn btn-primary"/>
            </div>
        </div>

    </form>

        <?php
        } else {
             
            echo "<div class='container'>";

           $theMsg = ' <div class= "alert alert-danger">thers No Such ID </div>';

            redirectHome($theMsg);

            echo "</div>";

        }


        } elseif ($do == 'Update') {

            echo   "<h1 class='text-center'>Update Menu</h1>";
            echo   "<div class='container'>";


            

            if ($_SERVER['REQUEST_METHOD'] == 'POST'){

                $id    =$_POST['catid'];
                $name   =$_POST['name'];
           
              

                //  check si il'ya no erreur fait les modification

        

                    // UPDATE Dant DataBase

                    $stmt =$db->prepare("UPDATE menu 
                                        SET 
                                        Name = ?
                                      
                                     WHERE 
                                        ID = ?");
                    $stmt->execute(array($name));

                    
                    //Echo Seccess Message

                $theMsg = "<div class='alert alert-success'>" . $stmt->rowCount() . ' Record Updated</div>';

                    // redirectHome($theMsg, 'back', 4);
                    redirectHome($theMsg, 'back');

          

        }else {

            // $errorMsg ='Sorry';

            echo "<div class='container'>";

            $theMsg = ' <div class= "alert alert-danger"> Sorry You Cant Browse This Page Directly</div>';
 
             redirectHome($theMsg);
 
             echo "</div>";
 

            // redirectHome("$errorMsg");
        }

        echo "</div>";


        } elseif ($do == 'Delete'){

            
        echo   "<h1 class='text-center'>Delete Member</h1>";
        echo   "<div class='container'>";
        // il y'a un nomber afficher si non afficher false

        $catid =  isset($_GET['catid']) && is_numeric($_GET['catid']) ? intval($_GET['catid']):0;

        $check = checkItem('ID', 'menu', $catid);

       
      


    if($check > 0){ 

        $stmt =$db->prepare("DELETE FROM menu WHERE ID = :zid");

        $stmt->bindParam(":zid",  $catid);

        $stmt->execute();

        $theMsg =  "<div class='alert alert-success'>" . $stmt->rowCount() . ' Record Deleted</div>';

        redirectHome($theMsg,'back');


    } else {

        // echo 'Not Exist';
        echo "<div class='container'>";

        $theMsg = ' <div class= "alert alert-danger"> Sorry  This ID Not Exist</div>';

         redirectHome($theMsg);

         echo "</div>";
    }

        echo'</div>';


        }

        include $tpl . 'footer.php';

    } else {

        header ('Location : index.php');

        exit();
    }






?>