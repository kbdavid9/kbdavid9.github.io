<?php
    require_once ("Connexion.php");
    $requete="select * from utilisateurs";
   $resultatU=$connexion->query($requete);
    
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/css/bootstrap-grid.min.css">
    <title>Page</title>
</head>
<body>
    <h2>Liste des utilisateur :</h2>
    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading"> 
                <img src="./Images/icons8_add_user_group_man_man.ico" alt="" Id="Images1">
                Ajoutez un utilisateur...
            </div>
            <div class="panel-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Num</th><th>Nom</th><th>Mot de passe</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($utilisateurs=$resultatU->fetch()){ ?>
                        <tr>
                            <td> <?php echo $utilisateurs["idutilisateurs"] ?> </td>
                            <td> <?php echo $utilisateurs["nom"] ?> </td>
                            <td> <?php echo $utilisateurs["psw"] ?> </td>
                        </tr>
                       <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>