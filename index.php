<?php
require_once "classes/Compte.php";
require_once "classes/CompteCourant.php";
require_once "classes/CompteEpargne.php";

// on instancie le compte
$compte1 = new CompteCourant("fred", 100);
var_dump($compte1);

