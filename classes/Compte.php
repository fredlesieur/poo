<?php
/**
 * objet compte bancaire
 */
abstract class Compte
{
    //propriétés
    /**
     * titulaire du compte
     * @var string
     */
    private string $titulaire;
    /**
     * solde du compte
     * @var float
     * 
     */
    private float $solde;
    /**
     * construictaire du compte bancaire
     * @param string $nom Nom du titualaire
     * @param float $montant Montant du solde a l'ouverture
     */
    public function __construct(string $nom,float $montant = 100, ){
        //on attribue le nom à la propriété titulaire de l'instance créee
        $this->titulaire = $nom;
        $this->solde = $montant;
    }
    //accesseurs

    /**
     * getter de titulaire - retourne la valeur du titulaire du compte
     * @return string
     */

    public function getTitulaire(): string
    {
        return $this->titulaire;
    }
    /**
     * modifie la valeur du titulaire du compte
     * @param string $nom Nouveau nom du titulaire
     * @return Compte compte bancaire
     */
    public function setTitulaire(string $nom):self
    {
        // on vérifie s'il y a un titulaire
        if($nom!= ""){
            $this->titulaire = $nom;
        }
        return $this;
    }
    /**
     * 
     * retourne le solde du compte
     * @return float solde du compte
     */
    public function getSolde(): float{
        return $this->solde;
    }
    /**
     * modifie le solde du compte
     * @param float $montant Montant du solde
     * @return Compte compte bancaire
     */
    public function setSolde(float $montant):self

    {
        if($montant >0) {
            $this->solde = $montant;
        }
        return $this;
    }
    /**
     * Déposer de l'argent sur le compte
     * @param float $montant Montant déposé
     * @return void
     */
    public function deposer(float $montant)
    {
        // on verifie si le montant est positif
        if ($montant >0)
        $this-> solde += $montant;
    }
    /**
     * Retourne une chaine de caracteres affichant le solde
     * @return string
     */
    public function voirSolde()
    {
        return "Le solde du compte est de $this->solde euros";
    }
    /**
     * Retire de l'argent sur le compte
     * @param float $montant Montant retiré
     * @return void
     */
    public function retirer(float $montant)
    {
        // on verifie si le solde est suffisant et que le montant est positif
        if ($montant > 0 && $this->solde >= $montant) {
            $this->solde -= $montant;
        }else{
            echo "Le montant du solde n'est pas suffisant";
        }    
    }
}