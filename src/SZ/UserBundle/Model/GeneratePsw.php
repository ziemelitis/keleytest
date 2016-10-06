<?php
namespace Itelis\TCMBundle\Model;

class GeneratePassword  {

    private $longeur;
    
    public function __construct($longeur=8) {
         $this->longeur=$longeur;
    }
    
    public function getLongeur($longeur)
    {
        return $this->longeur;
    }

    public function setLongeur($longeur)
    {
        $this->longeur = (int) $longeur;
    }

    public function generate()
    {
        $password='';
        // Ensemble des caract�res utilis�s pour le cr�er
        $cars="234567890abcdefghijkmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $wlong=strlen($cars);

        // On initialise la fonction al�atoire
        srand((double)microtime()*1000000);
        // On boucle sur le nombre de caract�res voulus
        for($i=0;$i<$this->longeur;$i++){
        // Tirage al�atoire d'une valeur entre 1 et wlong
              $wpos=rand(0,$wlong-1);
        // On cumule le caract�re dans le mot de passe
              $password=$password.substr($cars,$wpos,1);   
        }
        return $password;        
    }
}
