<html>
<link rel="stylesheet" href="../css/bulma.min.css">
<link rel="stylesheet" href="../css/css/bootstrap-grid.min.css">
<body>
    <h3 id="gros">Nouveau utilisateur</h3>
    <div class="container">
                <div class="panel panel-primary">
                    <div class="panel-heading"> 
                        <img src="./Images/icons8_add_user_group_man_man.ico" alt="" Id="Images1">
                        Ajoutez un nouveau utilisateur...
                    </div>
                    <div class="panel-body">
                        <form method="POST" action="Insersion_user.php" class="form">
                            
                            <input type="text" Id="Nom" Nam="Nom"><br>
                            
                            <input type="tel" Id="psw" Nam="psw"><br>
                            <button value="Entrez" type="submit" class="btn btn-success"> 
                                <span class="glyphicon glyphicon-save"></span>
                                Enregistrez
                            </button>
                        </form>
                    </div>
                </div>
            </div>
         
</body>
</html>