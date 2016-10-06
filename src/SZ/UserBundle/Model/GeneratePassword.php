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
        $cars="234567890abcdefghijkmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $wlong=strlen($cars);

        srand((double)microtime()*1000000);

        for($i=0;$i<$this->longeur;$i++){
              $wpos=rand(0,$wlong-1);
              $password=$password.substr($cars,$wpos,1);   
        }
        return $password;        
    }
}
