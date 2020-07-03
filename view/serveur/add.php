<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout</title>
    <link rel="stylesheet" href="./style/bootstrap.min.css">
</head>

<body>
    <section class="container w-50 pt-5">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Formulaire d'ajout de serveur</h5>
                <form method="POST" action="controller/ServeurController.php">
                    <div class="form-group">
                        <label class="control-label">Nom du serveur</label>
                        <input type="text" class="form-control" name="nom">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Adresse ip du serveur</label>
                        <input type="text" class="form-control" name="adrip">
                    </div>
                    <div class="pt-3 pb-1">
                        <input class="btn btn-lg btn-success ml-5" type="submit" value="Envoyer" name="ajoutserveur">
                        <input class="btn btn-lg btn-danger mr-5 float-right" type="reset" value="Annuler" name="annuler">
                    </div>

                </form>
            </div>
        </div>
    </section>

</body>

</html>