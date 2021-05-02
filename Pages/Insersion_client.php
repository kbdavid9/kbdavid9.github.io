<?php
    require_once ("Connexion.php");
    
     $nomc=isset($_POST["Nom"])?$_POST["Nom"]:"";
     $tel=isset($_POST["Tel"])?$_POST["Tel"]:"";
 
     $requete="insert into clients(nomclt,tel) values(?,?)";
     $params=array($nomc,$tel);
     $resultat=$connexion->prepare($requete);
     $resultat->execute($params);
 
     header ("location:Liste.php");
?>