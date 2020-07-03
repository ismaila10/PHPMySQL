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
                    <input type="hidden" name="page" value="listeserveur">
                    <input type="text" name="motcle" id="btn-input" class="form-control" placeholder=" Saisir le serveur à chercher ici ...">
                    <span class="input-group-btn">
                        <input type="submit" value="rechercher" class="btn btn-primary btn-md" id="btn-chat">
                    </span>
                </div>
            </form>
        </div>
        <div class="card mt-4">
            <div class="card-body">
                <h5 class="card-title">Liste des serveurs</h5>
                <table class="table table-bordered">
                    <tr>
                        <td>Identifiant</td>
                        <td>Nom du serveur</td>
                        <td>Adresse ip du serveur</td>
                        <td>Action</td>
                        <td>Action</td>
                    </tr>
                    <?php
                    while ($serveur = mysqli_fetch_row($liste)) {
                        echo "<tr>
                                    <td>$serveur[0]</td>
                                    <td>$serveur[1]</td>
                                    <td>$serveur[2]</td>
                                    <td><a href='?page=editserveur&id=$serveur[0]'>Editer</a></td>
                                    <td><a href='controller/ServeurController.php?id=$serveur[0]'>Supprimer</a></td>
                                </tr>";
                    }
                    ?>
                </table>
            </div>
        </div>
    </section>

</body>

</html>