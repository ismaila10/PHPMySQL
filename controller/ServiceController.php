<?php
//header('location:http://localhost:8888/PhpMySQL/ParcInformatique/?page=listeserveur');
require_once '../model/DB.php';
require_once '../model/ServiceDao.php';

function versListe()
{
    $base_url = "http://localhost:8888/PhpMySQL/ParcInformatique/";
    header("location:$base_url?page=listeservice");
}

// Pour l'ajout
if (isset($_POST['ajoutservice'])) {
    extract($_POST);

    addService($noms, $ports, $etats, $idserv);

    versListe();
}
// Pour la Suppression
if (isset($_GET['id'])) {
    deleteService($_GET['id']);
    versListe();
}
// Pour la modification
if (isset($_POST['modifierservice'])) {
    // Pour la récupération des données
    $ids = $_POST['ids'];
    $noms = $_POST['noms'];
    $ports = $_POST['ports'];
    $etats = $_POST['etats'];
    $idserv = $_POST['idserv'];
    //var_dump($id . ' ' . $nomserveur . ' ' . $adripserveur);
    // Pour la MAJ
    updateService($ids, $noms, $ports, $etats, $idserv);
    // Retour vers la liste
    versListe();
}
