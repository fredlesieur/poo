<?php
use App\Client\Compte as CompteClient;
use App\Banque\{CompteCourant,CompteEpargne};
use App\autoloader;
require_once 'classes/Autoloader.php';

 // Enregistrement des classes automatiquement
Autoloader::register();


// on instancie le compte
<<<<<<< HEAD
$compte1 = new CompteCourant("benoit",500,1000);
var_dump($compte1);
/* $compte1->setTitulaire('robert');
=======
//code xavier
$compte1 = new CompteCourant("fred", 500, 200);
>>>>>>> cd9e4ede325d794ce2d96832383e76fab6da7ecc
var_dump($compte1);

$compteEpargne = new CompteEpargne("fred", 200, 5);
var_dump($compteEpargne);

$compteEpargne->verserInterets();
var_dump($compteEpargne);
<<<<<<< HEAD

$client = new CompteClient;

 */ 
=======
>>>>>>> cd9e4ede325d794ce2d96832383e76fab6da7ecc
