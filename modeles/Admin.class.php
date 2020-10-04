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
     // La fonction ajoute un utilisateur admin/usager
    public function sqlAjouterAdmin($nom, $prenom, $iden, $mdp, $type)
    {
        $requete = "INSERT INTO vino__utilisateur (nom, prenom, identifiant, mdp,id_type) VALUES ('$nom', '$prenom','$iden', md5('$mdp'),'$type')";

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

    //Fontion pour supprimer un utilisateur
    public function supprimerUtilisateur($id_utilisateur)
    {
        $requete = "DELETE FROM vino__utilisateur WHERE id = " . $id_utilisateur;

        if ($this->_db->query($requete)) {

            return true;
        }
    }
    // La fonction récupérer la liste des utilisateurs par id
    public function getListeUtilisateursById($id)
    {
        $requete = "SELECT * FROM vino__utilisateur AS  v_u WHERE v_u.id= ".$id;

        $res = $this->_db->query($requete);
        if ($res->num_rows) {
            while ($row = $res->fetch_assoc()) {
                $rows[] = $row;
            }
        }
        return $rows;
    }

    //récuperer le nombre de nouvels usagers (par mois)
    public function getNombreNouveauUsagers(){
        $requete = "SELECT MONTH(date_inscription) 
        as MONTH ,YEAR(date_inscription) as year, count(id) as nombreUsers ,date_inscription
        FROM vino__utilisateur GROUP BY MONTH(date_inscription) ,YEAR(date_inscription) 
        ORDER BY date_inscription DESC
        ";

        $res = $this->_db->query($requete);
        if ($res->num_rows) {
            while ($row = $res->fetch_assoc()) {
                $rows[] = $row;
            }
        }

        return $rows;

    }
}
