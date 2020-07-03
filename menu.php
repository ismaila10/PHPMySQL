<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="style/bootstrap.min.css">
</head>

<body>
    <section>
        <div class="navbar bg-info">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg">
                    <a class="navbar-brand" href="#">Accueil</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="?page=addserveur">Ajout de serveur<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="?page=listeserveur">Liste des serveurs</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="?page=addservice">Ajout de service</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="?page=listeservice">Liste des services</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </section>
</body>

</html>