<?php

/**
 * Class Admin
 * Cette classe possède les fonctions d'administration.
 * 
 * @author Chingiz Taghizade
 * @version 1.0
 * @update 2020-09-21
 */
class Admin extends Modele
{
    // La fonction ajoute un utilisateur admin/usager
    public function sqlAjouterAdmin($nom, $prenom, $iden, $mdp, $courriel, $telephone, $type)
    {
        $requete = "INSERT INTO vino__utilisateur (nom, prenom, identifiant, mdp, courriel, telephone,id_type) VALUES ('$nom', '$prenom','$iden', md5('$mdp'),'$courriel','$telephone','$type')";

        if ($this->_db->query($requete)) {

            return true;
        }
    }

    // La fonction modifie un utilisateur
    public function sqlModificationUtilisateur($id, $nom, $prenom, $iden, $mdp, $courriel, $telephone, $type)
    {
        $requete = "UPDATE vino__utilisateur SET nom = '$nom', prenom = '$prenom', iden = '$iden', mdp = md5('$mdp'), courriel = '$courriel', telephone = '$telephone', type = '$type' WHERE id='$id'";

        if ($this->_db->query($requete)) {

            return true;
        }
    }

    // La fonction récupérer la liste des utilisateurs
    public function getListeUtilisateurs()
    {
        $requete = "SELECT v_c.id, nom, prenom, identifiant, courriel, telephone, v_u_t.type FROM vino__utilisateur v_c JOIN vino__utilisateur_type v_u_t WHERE v_c.id_type = v_u_t.id";

        $res = $this->_db->query($requete);
        if ($res->num_rows) {
            while ($row = $res->fetch_assoc()) {
                $rows[] = $row;
            }
        }

        return $rows;
    }

    //Fontion pour supprimer le cellier
    public function supprimerUtilisateur($id_utilisateur)
    {
        $requete = "DELETE FROM vino__utilisateur WHERE id = " . $id_utilisateur;

        if ($this->_db->query($requete)) {

            return true;
        }
    }
}
