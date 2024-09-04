<?php

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

   

   /**
    * Get taux d'interet du compte
    *
    * @return  int
    */ 
   public function getTaux_interets()
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
   public function setTaux_interets(int $taux_interets)
   {
      $this->taux_interets = $taux_interets;

      return $this;
   }
}