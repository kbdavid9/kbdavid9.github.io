<html>
<link rel="stylesheet" href="../css/bulma.min.css">
<link rel="stylesheet" href="../css/css/bootstrap-grid.min.css">
<body>
    <h3 id="gros">Contactes</h3>
    <div class="container">
                <div class="panel panel-primary">
                    <div class="panel-heading"> 
                        <img src="./Images/icons8_add_user_group_man_man.ico" alt="" Id="Images1">
                        Ajoutez un(e) client(e)...
                    </div>
                    <div class="panel-body">
                        <form method="POST" action="Insersion_client.php" class="form">
                            <label for="nom">Nom Complet :</label>
                            <input type="text" Id="nom" Nam="Nom"><br>
                            <label for="tel">Tel :</label>
                            <input type="tel" Id="tel" Nam="Tel"><br>
                            <buttom type="submit" value="Entrez">
                            <button type="submit" class="btn btn-success"> 
                                <span class="glyphicon glyphicon-save"></span>
                                Enregistrez
                            </button>
                        </form>
                    </div>
                </div>
            </div>
         <script src="../css/Java.js"></script>
</body>
</html>