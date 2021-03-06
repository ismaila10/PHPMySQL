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
                <h5 class="card-title">Formulaire d'ajout des services</h5>
                <form method="POST" action="controller/ServiceController.php">
                    <div class="form-group">
                        <label class="control-label">Nom du service</label>
                        <input type="text" class="form-control" name="noms">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Numéro de port du service</label>
                        <input type="text" class="form-control" name="ports">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Etat du service</label><br>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label ml-5" for="inlineRadio1">Activé</label>
                            <input class="form-check-input ml-2" type="radio" name="etats" value="1">
                            <label class="form-check-label ml-5 pl-5" for="inlineRadio1">Désactivé</label>
                            <input class="form-check-input ml-2" type="radio" name="etats" value="0">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Serveur</label>
                        <select class="form-control" name="idserv">
                            <option value="">Faites un choix</option>
                            <?php
                            require_once 'model/DB.php';
                            require_once 'model/ServeurDao.php';
                            $liste_serveurs = listeServeur();
                            while ($ligne = mysqli_fetch_row($liste_serveurs)) {
                                echo "<option value='$ligne[0]'>$ligne[1]</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="pt-3 pb-1">
                        <input class="btn btn-lg btn-success ml-5" type="submit" value="Envoyer" name="ajoutservice">
                        <input class="btn btn-lg btn-danger mr-5 float-right" type="reset" value="Annuler" name="annuler">
                    </div>

                </form>
            </div>
        </div>
    </section>

</body>

</html>