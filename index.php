<?php
use App\Client\Compte as CompteClient;
use App\Banque\{CompteCourant,CompteEpargne};
use App\autoloader;
require_once 'classes/Autoloader.php';

 // Enregistrement des classes automatiquement
Autoloader::register();


// on instancie le compte
$compte1 = new CompteCourant("benoit",500,1000);
var_dump($compte1);
/* $compte1->setTitulaire('robert');
var_dump($compte1);

$compteEpargne = new CompteEpargne("benoit", 800,3);
var_dump($compteEpargne);
//suce mes boules
$compteEpargne->verserInterets();
var_dump($compteEpargne);

$client = new CompteClient;

 */ 