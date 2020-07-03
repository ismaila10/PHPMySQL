<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout</title>
    <link rel="stylesheet" href="./style/bootstrap.min.css">
</head>

<body>
    <section class="container pt-5">
        <div style="margin-left: 60%;">
            <form method="get" action="">
                <div class="input-group">
                    <input type="hidden" name="page" value="listeservice">
                    <input type="text" name="motcle" id="btn-input" class="form-control" placeholder=" Saisir le service à chercher ici ...">
                    <span class="input-group-btn">
                        <input type="submit" value="rechercher" class="btn btn-primary btn-md" id="btn-chat">
                    </span>
                </div>
            </form>
        </div>
        <div class="card mt-4">
            <div class="card-body">
                <h5 class="card-title">Liste des services</h5>
                <table class="table table-bordered">
                    <tr>
                        <td>Identifiant</td>
                        <td>Nom du service</td>
                        <td>Numéro de port du service</td>
                        <td>Etat du service</td>
                        <td>Serveur</td>
                        <td>Action</td>
                        <td>Action</td>
                    </tr>
                    <?php
                    while ($service = mysqli_fetch_row($liste)) {
                        echo "<tr>
                                    <td>$service[0]</td>
                                    <td>$service[1]</td>
                                    <td>$service[2]</td>
                                    <td>$service[3]</td>
                                    <td>$service[4]</td>
                                    <td><a href='?page=editservice&id=$service[0]'>Editer</a></td>
                                    <td><a href='controller/ServiceController.php?id=$service[0]'>Supprimer</a></td>
                                </tr>";
                    }
                    ?>
                </table>
            </div>
        </div>
    </section>

</body>

</html>