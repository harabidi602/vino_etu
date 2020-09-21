<?php
/**
 * Class Admin
 * Cette classe possède les fonctions d'administration.
 * 
 * @author Chingiz Taghizade
 * @version 1.0
 * @update 2020-09-21
 */

class Admin extends Modele {
    
    
   // La fonction ajoute un utilisateur admin/usager
   public function sqlAjouterAdmin($nom,$prenom,$iden,$mdp,$courriel,$telephone,$type){    
    

   $requete = "INSERT INTO vino__utilisateur (nom, prenom, identifiant, mdp, courriel, telephone,id_type) VALUES ('$nom', '$prenom','$iden', md5('$mdp'),'$courriel','$telephone','$type')";

    $res = $this->_db->query($requete);
       
    return true;    
   
}

    
    // La fonction modifie un utilisateur
    public function sqlModificationUtilisateur($id,$nom,$prenom,$iden,$mdp,$courriel,$telephone,$type){ 

    $requete = "UPDATE vino__utilisateur SET nom = '$nom', prenom = '$prenom', iden = '$iden', mdp = md5('$mdp'), courriel = '$courriel', telephone = '$telephone', type = '$type' WHERE id='$id'";

    $res = $this->_db->query($requete);
       
    return true; 

} 
     
   
}

?>