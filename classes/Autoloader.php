<?php
namespace App;
class Autoloader
{
    static function register()
    {
        spl_autoload_register([
            __CLASS__,
            'autoload'
        ]);
    }

   static function autoload($class)
   {
// on récupère dans $class la totalité du namesapce de la classe concernée (App\Client/Compte)
// on retire App\
$class = str_replace(__NAMESPACE__ . '\\', '', $class);
   
//on remplace les \par des /
$class = str_replace('\\', '/', $class);

$fichier =__DIR__ . '/' . $class. 'php';
//on verifie si le fichier existe
if(file_exists($fichier)){
require_once $fichier;
}
}
}