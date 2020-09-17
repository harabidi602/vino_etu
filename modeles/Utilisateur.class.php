<?php

/**
 * Class Utilisateur
 * Cette classe de l'entité nouveau utilisateur. 
 * @author Chingiz Taghizade
 * @version 1.0
 * @update 2020-09-15
 */

    

class Utilisateur
{
    private $nom  = null;
    private $prenom  = null;
    private $identifiant = null;
    private $mdp  = null;
    private $courriel  = null;
    private $telephone = null;   
       
    
    private $erreurs = array();
	
    
    // Constructeur de la classe 
    public function __construct($nom  = null, $prenom = null, $identifiant  = null, $mdp  = null, $courriel  = null, $telephone  = null){
        
        $this->setNom($nom);
        $this->setPrenom($prenom);
        $this->setIdentifiant($identifiant);
        $this->setMdp($mdp);
        $this->setCourriel($courriel);
        $this->setTelephone($telephone);
    }
    
     
    // Accesseur magique d'une propriété de l'objet return <type de la propriété>    
    public function __get($prop) {
        return $this->$prop;
    }
    

    // Getter nom 
    public function getNom() {
        return $this->nom;
    }
    
    // Getter prenom 
    public function getPrenom() {
        return $this->prenom;
    }
    
    // Getter identifiant 
    public function getIdentifiant() {
        return $this->identifiant;
    }

    // Getter mdp 
    public function getMdp() {
        return $this->mdp;
    }
    
    // Getter courriel 
    public function getCourriel() {
        return $this->courriel;
    }
    
    // Getter telephone 
    public function getTelephone() {
        return $this->telephone;
    }
 

    
    // Setter nom @return this 
    public function setNom($nom = null) {
        unset($this->erreurs['nom']);
        $nom = trim($nom);
        $regExp ='/^([a-zA-ZéèêëïôÉ]{2,25})$/'; 
        if ($nom!== null && preg_match($regExp, $nom)) {
            $this->nom = ucwords(strtolower($nom));
        } else {
           $this->erreurs['nom'] = "Le nom doit comprendre entre 2 et 25 caractères alphabétiques";
        }
        return $this;
    }        

    
    // Setter prenom @return this 
    public function setPrenom($prenom = null) {
        unset($this->erreurs['prenom']);
        $prenom = trim($prenom);
        $regExp ='/^([a-zA-ZéèêëïôÉ]{2,25})$/'; 
        if ($prenom !== null && preg_match($regExp, $prenom)) {
            $this->prenom = ucwords(strtolower($prenom));
        } else {
           $this->erreurs['prenom'] = "Le prenom doit comprendre entre 2 et 25 caractères alphabétiques";
        }
        return $this;
    }    
    
    

    // Setter identifiant @return this 
    public function setIdentifiant($identifiant = null) {
         unset($this->erreurs['identifiant']);
        $identifiant = trim($identifiant);
        $regExp = '/^[a-z][a-z0-9_-]{3,16}$/'; 
        if ($identifiant !== null && preg_match($regExp, $identifiant)) {
           $this->identifiant = $identifiant;
        } else {
           $this->erreurs['identifiant'] = "L'identifiant doit comprendre entre 3 et 16 caractères";
        }
        return $this;
    }     


    // Setter mdp @return this 
    public function setMdp($mdp = null) {
        unset($this->erreurs['mdp']);
        $mdp = trim($mdp);
        $regExp ='/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{8,}$/'; 
        if ($mdp!== null && preg_match($regExp, $mdp)) {
            $this->mdp = $mdp;
        } else {
           $this->erreurs['mdp'] = "Utilisez 8 caractères ou plus pour votre mot de passe";
        }
        return $this;
    }        

    
    // Setter courriel @return this  
    public function setCourriel($courriel = null) {
        unset($this->erreurs['courriel']);
        $courriel = trim($courriel);
        $regExp ='/^[^@]+@[^@.]+\.[^@]+$/'; 
        if ($courriel !== null && preg_match($regExp, $courriel)) {
            $this->courriel = $courriel;
        } else {
           $this->erreurs['courriel'] = "Le format de l'e-mail est incorrect";
        }
        return $this;
    }    
    
    

    // Setter telephone @return this 
    public function setTelephone($telephone = null) {
         unset($this->erreurs['telephone']);
        $telephone = trim($telephone);
        $regExp = '/^(\s*)?([- ()]?\d[- ()]?){10,14}(\s*)?$/'; 
        if ($telephone!== null && preg_match($regExp, $telephone)) {
            $this->telephone = $telephone;
        } else {
           $this->erreurs['telephone'] = "Le numero de telephone doit avoir le format 555-555-5555 ou (555) 555-5555 ou 1-555-555-5555 ou 1 (555) 555-5555";
        }
        return $this;
    }     
    
}



