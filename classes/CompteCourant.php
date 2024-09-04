<?php
/**
 * compte bancaire (hérite de Compte)
 */
class CompteCourant extends Compte
{
  private $decouvert;

  public function __construct(string $nom, float $montant, int $decouvert)
  {
    parent::__construct($nom, $montant);

    $this->decouvert = $decouvert;
  }

  public function getDecouvert():int 
  {
  return $this->decouvert;
}
  public function setDecouvert(int $montant):self
{
  if($montant >= 0){
    $this->decouvert = $montant;
  }
  return $this;
}

  public function retirer(float $montant)
  {
    if($montant > 0 && $this->solde - $montant >= -$this->decouvert){
      $this->solde -= $montant;
    }else {
      echo 'solde insuffisant';
    }
  }
}


