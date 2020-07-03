<?php
//header('location:http://localhost:8888/PhpMySQL/ParcInformatique/?page=listeserveur');
require_once '../model/DB.php';
require_once '../model/ServeurDao.php';

function versListe()
{
    $base_url = "http://localhost:8888/PhpMySQL/ParcInformatique/";
    header("location:$base_url?page=listeserveur");
}

// Pour l'ajout
if (isset($_POST['ajoutserveur'])) {
    $nomserveur = $_POST['nom'];
    $adripserveur = $_POST['adrip'];

    addServeur($nomserveur, $adripserveur);

    versListe();
}
// Pour la Suppression
if (isset($_GET['id'])) {
    deleteServeur($_GET['id']);
    versListe();
}
// Pour la modification
if (isset($_POST['modifierserveur'])) {
    // Pour la récupération des données
    $id = $_POST['id'];
    $nomserveur = $_POST['nom'];
    $adripserveur = $_POST['adrip'];
    //var_dump($id . ' ' . $nomserveur . ' ' . $adripserveur);
    // Pour la MAJ
    updateServeur($id, $nomserveur, $adripserveur);
    // Retour vers la liste
    versListe();
}
