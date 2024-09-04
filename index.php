<?php
require_once 'classes/Compte.php';
require_once 'classes/CompteCourant.php';
require_once 'classes/CompteEpargne.php';

// on instancie le compte
$compte1 = new CompteCourant("benoit",500,1000);
$compte1->setTitulaire('robert');
var_dump($compte1);

$compteEpargne = new CompteEpargne("benoit", 800,3);
var_dump($compteEpargne);
//suce mes boules
$compteEpargne->verserInterets();
var_dump($compteEpargne);