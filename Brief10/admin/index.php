<?php
session_start(); // ouvrir une session
//session admin
if (isset($_SESSION['username'])) { // si il y'a une session ouvert
    header('location: dashbord.php'); // redirect vers la page dashbord
    exit();
    //session user
} elseif (isset($_SESSION['user'])) {
    header('location: products.php');
    exit();
}

include "init.php"; // include init
//check if user coming from http post request
if ($_SERVER['REQUEST_METHOD'] == 'POST') { // si la methode de la formulaire est POST

    $username = $_POST['user'];
    $password = $_POST['pass'];
    $shapassword = sha1($password);
//check if user exit in database
    $stmt = $db->prepare("SELECT username, password FROM users WHERE username = ? AND password = ? AND groupeID = 1");
    $stmt->execute(array($username, $shapassword));
    // $row = $stmt->fetch();
    //la taile de count 
    $count = $stmt->rowCount();

    if ($count > 0) {
        $_SESSION['username'] = $username; // SESSION USERNAME
        header('location: dashbord.php'); // REDIRECT VERS PAGE DASHBORD
        exit();
    } 

    $stmt2 = $db->prepare("SELECT  username, password FROM users WHERE username = ? AND password = ? AND groupeID = 0");
    $stmt2->execute(array($username, $shapassword));
 
    $count2 = $stmt2->rowCount();

    if ($count2 > 0) {
        $_SESSION['user'] = $username; // SESSION USERNAME
        header('location: products.php'); // REDIRECT VERS PAGE DASHBORD
        exit();
    }
}

?>
<!-- envoyer les donnée dans la meme page dans la methode poste  -->

<form class="login"  method="POST">
    <h4 class="text-center"> Login</h4>
    <input class="form-control" type="text" name="user" placeholder="Username" autocomplete="off">
    <input class="form-control" type="password" name="pass" placeholder="Password" autocomplete="new-password">
    <input type="submit" class="btn btn-primary btn-block" value="login">
    <a href="sign-up.php">S'inscrire sur notre site</a>
</form>


<?php include $tplDirName . "footer.php"; // include la page (footer) 
?>