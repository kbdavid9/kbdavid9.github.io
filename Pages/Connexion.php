
<?php
    $serveur = "localhost";
    $login = "root";
    $pass = "";

    try{
        $connexion = new PDO("mysql:host=$serveur;dbname=couture", $login, $pass);
        $connexion ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo 'connection reuci !';
    }
    catch(PDOException $e){
        echo 'Echec connection :' .$e->getMessage();
    }

?>