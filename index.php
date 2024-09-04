<?php
require_once "classes/Compte.php";
require_once "classes/CompteCourant.php";
require_once "classes/CompteEpargne.php";

// on instancie le compte
$compte1 = new CompteCourant("fred", 500, 200);
$compte1->setDecouvert(200);
var_dump($compte1);

/**
 * test commentaire XAVIER 
 * sur nouvelle branche GIT de FRED
 * 
 */