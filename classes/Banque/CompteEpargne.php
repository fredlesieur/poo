<?php
<<<<<<< HEAD:classes/Banque/CompteEpargne.php
namespace App\Banque;

=======
class CompteEpargne extends Compte
{
    private $taux_interets;

    public function __construct(string $nom, float $montant, int $taux)
    {
        parent::__construct($nom, $montant);
        $this->taux_interets = $taux;
    }
   

    /**
     * Get the value of taux_interets
     */ 
    public function getTauxInterets(): int
    {
        return $this->taux_interets;
    }

    /**
     * Set the value of taux_interets
     *
     * @return  self
     */ 
    public function setTauxInterets(int $taux_interets): self
    {
        if($taux_interets >= 0){
            $this->taux_interets = $taux_interets;
        }
        return $this;
    }

    public function verserInterets(){
        $this->solde = $this->solde + ($this->solde * $this->taux_interets / 100);
    }
>>>>>>> cd9e4ede325d794ce2d96832383e76fab6da7ecc:classes/CompteEpargne.php

/**
 * compte avec taux d interets
 */
class CompteEpargne extends Compte
{
    /**
     * taux d'interet du compte
     * @var int
     */
   private $taux_interets;

   public function __construct(string $nom,float $montant, int $taux)
   {
    // on transfere les informations nécessaires au constructeurs parent
    parent:: __construct($nom, $montant);
    $this->taux_interets = $taux;
   }

   

   /**
    * Get taux d'interet du compte
    *
    * @return  int
    */ 
   public function getTauxInterets(): int
   {
      return $this->taux_interets;
   }

   /**
    * Set taux d'interet du compte
    *
    * @param  int  $taux_interets  taux d'interet du compte
    *
    * @return  self
    */ 
   public function setTauxInterets(int $taux_interets): self
   {
    if ($taux_interets >=0){
      $this->taux_interets = $taux_interets;
    }
      return $this;
   }

   public function verserInterets() 
   {
    $this->solde = $this->solde + ($this->solde * $this->taux_interets / 100);
   }
}
