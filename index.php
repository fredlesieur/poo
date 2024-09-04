<?php
require_once 'classes/Compte.php';
require_once 'classes/CompteCourant.php';
require_once 'classes/CompteEpargne.php';

// on instancie le compte
//code xavier
$compte1 = new CompteCourant("fred", 500, 200);
var_dump($compte1);

$compteEpargne = new CompteEpargne("fred", 200, 5);
var_dump($compteEpargne);

$compteEpargne->verserInterets();
var_dump($compteEpargne);
