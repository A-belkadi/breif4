<?php 






$dsn = "mysql:host=localhost;dbname=builder";
$user = 'root';
$pass = '';

try {

    $db = new PDO($dsn, $user, $pass); // connexion avec le serveur

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {

    echo "ERROR" . $e->getMessage();
}


?>