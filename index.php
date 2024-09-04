<?php
require_once 'classes/Compte.php';
require_once 'classes/CompteCourant.php';
require_once 'classes/CompteEpargne.php';

// on instancie le compte
$compte1 = new CompteCourant("benoit",500,1000);
$compte1=retirer(200);
var_dump($compte1);

//suce mes boules