<?php
    require_once ("Connexion.php");
    $requete="select * from clients";
   $resultatC=$connexion->query($requete);
    
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
    <h2>Liste de Noms :</h2>
    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading"> 
                <img src="./Images/icons8_add_user_group_man_man.ico" alt="" Id="Images1">
                Ajoutez un(e) client(e)...
            </div>
            <div class="panel-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Num</th><th>Nom</th><th>Tel</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($clients=$resultatC->fetch()){ ?>
                        <tr>
                            <td> <?php echo$clients["idclients"] ?> </td>
                            <td> <?php echo$clients["nomclt"] ?> </td>
                            <td> <?php echo$clients["tel"] ?> </td>
                        </tr>
                       <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <p><a href="User.php"> Utilisateurs</a></p>
</body>
</html>