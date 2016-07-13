<?php

include_once 'Ifrocean_BDD/Triangle.php';
include_once 'Ifrocean_BDD/Zone.php';
include_once 'Ifrocean_BDD/Point.php';


$degreLatA = $_POST['latAdegreM'];
$minuteLatA = $_POST['latAminM'];
$secondeLatA = $_POST['latAsecM'];

$degreLongA = $_POST['longAdegreM'];
$minuteLongA = $_POST['longAminM'];
$secondeLongA = $_POST['longAsecM'];

$degreLatB = $_POST['latBdegreM'];
$minuteLatB = $_POST['latBminM'];
$secondeLatB = $_POST['latBsecM'];

$degreLongB = $_POST['longBdegreM'];
$minuteLongB = $_POST['longBminM'];
$secondeLongB = $_POST['longBsecM'];

$degreLatC = $_POST['latCdegreM'];
$minuteLatC = $_POST['latCminM'];
$secondeLatC = $_POST['latCsecM'];

$degreLongC = $_POST['longCdegreM'];
$minuteLongC = $_POST['longCminM'];
$secondeLongC = $_POST['longCsecM'];

$degreLatD = $_POST['latDdegreM'];
$minuteLatD = $_POST['latDminM'];
$secondeLatD = $_POST['latDsecM'];

$degreLongD = $_POST['longDdegreM'];
$minuteLongD = $_POST['longDminM'];
$secondeLongD = $_POST['longDsecM'];

$couleur='#000088';

$plage_id= $_POST['plage_idM'];

$RecupeModif = new Zone (
                    new Point ($degreLatA, $minuteLatA, $secondeLatA, $degreLongA, $minuteLongA, $secondeLongA),
                    new Point($degreLatB, $minuteLatB, $secondeLatB, $degreLongB, $minuteLongB, $secondeLongB),
                    new Point($degreLatC, $minuteLatC, $secondeLatC, $degreLongC, $minuteLongC, $secondeLongC),
                    new Point($degreLatD, $minuteLatD, $secondeLatD, $degreLongD, $minuteLongD, $secondeLongD),
                    $plage_id,$couleur);
                    
                   
$RecupeModif->surface=$RecupeModif->calculerSurface();

//ajout à la base 
$RecupeModif -> Inserer();

header('11-BD-ListeDesZones.php');

