<?php

function addService($noms, $ports, $etats, $idserv)
{
    $sql = "INSERT INTO service VALUES(NULL, '$noms', $ports, $etats, $idserv)";

    return executeSQL($sql);
}

function deleteService($ids)
{
    $sql = "DELETE FROM service WHERE ids = $ids ";

    return executeSQL($sql);
}

function updateService($ids, $noms, $ports, $etats, $idserv)
{
    $sql = "UPDATE service SET noms = '$noms',
            port = $ports,
            etats = $etats,
            idserv = $idserv
            WHERE ids = $ids ";

    return executeSQL($sql);
}

function listeService()
{
    $sql = "SELECT * FROM service";
    return executeSQL($sql);
}

/*function listeServiceConfigure()
{
    $sql = "SELECT serv.idserv, serv.nomserv, serv.adripserv
            FROM serveur serv, service s
            WHERE serv.idserv = s.idserv";
}*/

function getServiceById($ids)
{
    $sql = "SELECT * FROM service WHERE ids = $ids";
    return executeSQL($sql);
}

function recherche($motcle)
{
    $sql = "SELECT * FROM service WHERE noms LIKE '%$motcle%'";
    return executeSQL($sql);
}
