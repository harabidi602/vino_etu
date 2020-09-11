<?php

/**
 * Class Bouteille
 * Cette classe possède les fonctions de gestion des bouteilles dans le cellier et des bouteilles dans le catalogue complet.
 * 
 * @author Jonathan Martel
 * @version 1.0
 * @update 2019-01-21
 * @license Creative Commons BY-NC 3.0 (Licence Creative Commons Attribution - Pas d’utilisation commerciale 3.0 non transposé)
 * @license http://creativecommons.org/licenses/by-nc/3.0/deed.fr
 * 
 */
class Bouteille extends Modele
{
	const TABLE = 'vino__bouteille';

	public function getListeBouteille()
	{

		$rows = array();
		$res = $this->_db->query('Select * from ' . self::TABLE);
		if ($res->num_rows) {
			while ($row = $res->fetch_assoc()) {
				$rows[] = $row;
			}
		}

		return $rows;
	}

	public function getListeBouteilleCellier()
	{

		$rows = array();
		$requete = 'SELECT * FROM vino__cellier_bouteille AS v_c_b 
        INNER JOIN vino__cellier v_c ON v_c.id = v_c_b.id_cellier 
        INNER JOIN vino__bouteille v_b ON v_b.id = v_c_b.id_bouteille 
        INNER JOIN vino__bouteille_type v_b_t ON v_b_t.id = v_b.id_type';

		if (($res = $this->_db->query($requete)) ==	 true) {
			if ($res->num_rows) {
				while ($row = $res->fetch_assoc()) {
					$row['nom'] = trim(utf8_encode($row['nom']));
					$rows[] = $row;
				}
			}
		} else {
			throw new Exception("Erreur de requête sur la base de donnée", 1);
			//$this->_db->error;
		}



		return $rows;
	}

	/**
	 * Cette méthode permet de retourner les résultats de recherche pour la fonction d'autocomplete de l'ajout des bouteilles dans le cellier
	 * 
	 * @param string $nom La chaine de caractère à rechercher
	 * @param integer $nb_resultat Le nombre de résultat maximal à retourner.
	 * 
	 * @throws Exception Erreur de requête sur la base de données 
	 * 
	 * @return array id et nom de la bouteille trouvée dans le catalogue
	 */

	public function autocomplete($nom, $nb_resultat = 10)
	{

		$rows = array();
		$nom = $this->_db->real_escape_string($nom);
		$nom = preg_replace("/\*/", "%", $nom);

		//echo $nom;
		$requete = 'SELECT id, nom FROM vino__bouteille where LOWER(nom) like LOWER("%' . $nom . '%") LIMIT 0,' . $nb_resultat;
		//var_dump($requete);
		if (($res = $this->_db->query($requete)) ==	 true) {
			if ($res->num_rows) {
				while ($row = $res->fetch_assoc()) {
					$row['nom'] = trim(utf8_encode($row['nom']));
					$rows[] = $row;
				}
			}
		} else {
			throw new Exception("Erreur de requête sur la base de données", 1);
		}


		//var_dump($rows);
		return $rows;
	}


	/**
	 * Cette méthode ajoute une ou des bouteilles au cellier
	 * 
	 * @param Array $data Tableau des données représentants la bouteille.
	 * 
	 * @return Boolean Succès ou échec de l'ajout.
	 */
	public function ajouterBouteilleCellier($data)
	{
		//TODO : Valider les données.
		//var_dump($data);	

		$requete = "INSERT INTO vino__cellier_bouteille(id_bouteille, id_cellier,date_achat,garde_jusqua,notes,prix,quantite,millesime) VALUES (" .
			"'" . $data->id_bouteille . "'," .
			"'" . $data->id_cellier . "'," .
			"'" . $data->date_achat . "'," .
			"'" . $data->garde_jusqua . "'," .
			"'" . $data->notes . "'," .
			"'" . $data->prix . "'," .
			"'" . $data->quantite . "'," .
			"'" . $data->millesime . "')";

		$res = $this->_db->query($requete);

		return $res;
	}


	/**
	 * Cette méthode change la quantité d'une bouteille en particulier dans le cellier
	 * 
	 * @param int $id id de la bouteille
	 * @param int $nombre Nombre de bouteille a ajouter ou retirer
	 * 
	 * @return Boolean Succès ou échec de l'ajout.
	 */
	public function modifierQuantiteBouteilleCellier($id_bouteille, $nombre, $id_cellier)
	{
		//TODO : Valider les données.


		$requete = "UPDATE vino__cellier_bouteille SET quantite = GREATEST(quantite + " . $nombre . ", 0) WHERE id_bouteille = " . $id_bouteille . " AND id_cellier = " . $id_cellier;
		//echo $requete;
		$res = $this->_db->query($requete);

		return $res;
	}

	//Fonction pour consulter la quantite des bouteilles by id 	
	public function getQuantiteById($id_bouteille, $id_cellier)
	{
		$requete = "SELECT quantite FROM vino__cellier_bouteille WHERE id_bouteille = " . $id_bouteille . " AND id_cellier = " . $id_cellier;
		$res = $this->_db->query($requete);
		$row = $res->fetch_assoc();
		return $row;
	}
}
