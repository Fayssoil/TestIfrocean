<?php
include_once 'Ifrocean_BDD/Zone.php';

$id=$_GET["id"];
$zone=Zone::getById($id);
$zone->supprimer($id);

header('Location: 11-ListeDesZones.php');


?>

