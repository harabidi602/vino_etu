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
    public function sqlAjouterAdmin($nom, $prenom, $iden, $mdp, $activation, $type)
    {
        $requete = "INSERT INTO vino__utilisateur (nom, prenom, identifiant, mdp, activation, id_type) VALUES ('$nom', '$prenom','$iden', md5('$mdp'),'$activation','$type')";

        if ($this->_db->query($requete)) {

            return true;
        }
    }

    // La fonction modifie un utilisateur
    public function sqlModificationUtilisateur($id, $nom, $prenom, $identifiant, $activation, $id_type)
    {
        $requete = "UPDATE vino__utilisateur SET nom = '$nom', prenom = '$prenom', identifiant = '$identifiant', activation = '$activation', id_type = '$id_type' WHERE id='$id'";

        if ($this->_db->query($requete)) {

            return true;
        }
    }

    // La fonction récupérer la liste des utilisateurs
    public function getListeUtilisateurs()
    {
        $requete = "SELECT v_c.id, nom, prenom, identifiant, v_c.activation, v_u_t.type FROM vino__utilisateur v_c JOIN vino__utilisateur_type v_u_t WHERE v_c.id_type = v_u_t.id";

        $res = $this->_db->query($requete);
        if ($res->num_rows) {
            while ($row = $res->fetch_assoc()) {
                $rows[] = $row;
            }
        }

        return $rows;
    }

    // La fonction pour récupérer un utilisateur par son id
    public function getUtilisateurById($id)
    {
        $requete = "SELECT v_c.id, nom, prenom, identifiant, activation, v_u_t.type FROM vino__utilisateur v_c JOIN vino__utilisateur_type v_u_t ON v_c.id_type = v_u_t.id WHERE v_c.id = " . $id;

        $res = $this->_db->query($requete);
        $row = $res->fetch_assoc();

        return $row;
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
