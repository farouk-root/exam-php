<?php


include_once __DIR__ . '../../connection.php';
include_once __DIR__ . '../../model/vol.php';

class VolController
{
    public function ajouterVol(vol $newVol)
    {
       $connection = Connection::getConnection();
       $sql = "INSERT INTO vol (ref ,compagnieAerienne,destination,date,hDepart,hArivee) VALUES (?,?,?,?,?,?)";
        $chaima= $connection->prepare($sql);
        $chaima->execute([$newVol->getRef(),$newVol->getCompagnie(),$newVol->getDestination(),$newVol->getDate(),$newVol->getHeureD(),$newVol->getHeureA()]);
        return $chaima->rowCount();
    }
    public function getAllVols()
    {
        $connection = Connection::getConnection();
        $sql = "SELECT * FROM vol";
        $chaima = $connection->prepare($sql);
        $chaima->execute();
        return $chaima->fetchAll();
    }
}