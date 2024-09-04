<?php
/**
 * compte bancaire (hérite de Compte)
 */
class CompteCourant extends Compte
{
<<<<<<< HEAD
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


=======
private $decouvert;
/**
 * constructeur de compte courant
 * @param string $nom
 * @param float $montant
 * @param int $decouvert 
 * @return void
 * */

public function __construct(string $nom, float $montant, int $decouvert)
{
    // on transfere les informations nécessaires au constructeurs de Compte

    parent::__construct($nom, $montant);
    $this->decouvert = $decouvert;
}

public function getDecouvert():int
{
    return $this->decouvert;
}
public function setDecouvert(int $montant):self
{
    if ($montant >= 0) {
        $this->decouvert = $montant;
    }
    return $this;
}
public function retirer(float $montant)
{
    // on verifie si le decouvert pertmet le retrait
    if($montant>0 && $this->solde - $montant >= -$this->decouvert){
$this->solde-=$montant;
    }
}
}
>>>>>>> main
