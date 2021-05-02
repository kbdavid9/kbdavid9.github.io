<?php
    require_once ("Connexion.php");
    
     $nomn=isset($_POST["Nom"])?$_POST["Nom"]:"";
     $tel=isset($_POST["psw"])?$_POST["psw"]:"";
 
     $requete="insert into utilisateurs(nom,psw) values(?,?)";
     $params=array($nomn,$tel);
     $resultat=$connexion->prepare($requete);
     $resultat->execute($params);
 
     header ("location:User.php");
?>