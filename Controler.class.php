<?php

/**
 * Class Controler
 * Gère les requêtes HTTP
 * 
 * @author Jonathan Martel
 * @version 1.0
 * @update 2019-01-21
 * @license Creative Commons BY-NC 3.0 (Licence Creative Commons Attribution - Pas d’utilisation commerciale 3.0 non transposé)
 * @license http://creativecommons.org/licenses/by-nc/3.0/deed.fr
 * 
 */

class Controler
{

	/**
	 * Traite la requête
	 * @return void
	 */
	public function gerer()
	{

		switch ($_GET['requete']) {
			case 'listeBouteille':
				$this->listeBouteille();
				break;
			case 'autocompleteBouteille':
				$this->autocompleteBouteille();
				break;
			case 'ajouterNouvelleBouteilleCellier':
				$this->ajouterNouvelleBouteilleCellier();
				break;
			case 'ajouterBouteilleCellier':
				$this->ajouterBouteilleCellier();
				break;
			case 'boireBouteilleCellier':
				$this->boireBouteilleCellier();
				break;
			case 'consulterQuantiteBouteilleCellier':
				$this->consulterQuantiteBouteilleCellier($_GET['id_bouteille'], $_GET['id_cellier']);
				break;
			case 'authentification':
				$this->authentification();
				break;	
			case 'nouveauUtilisateur':
				$this->nouveauUtilisateur();
				break;	
			case 'getListeCelliers':
				$this->getListeCelliers();	
				break;	
			case 'ajouterNouveauCellier':
				$body = json_decode(file_get_contents('php://input'));
				$this->ajouterNouveauCellier(1, $body->nom_cellier);	
				break;
			case 'actualiserCellier':
				$body = json_decode(file_get_contents('php://input'));
				$this->modifierCellier($body->nom_cellier, $body->id_cellier);	
				break;
			case 'supprimerCellier':
				$body = json_decode(file_get_contents('php://input'));
				$this->supprimerCellier($body->id_cellier);	
				break;			
			default:
				$this->accueil();
				break;
		}
	}

	private function accueil()
	{
		$bte = new Bouteille();
		if(empty($_GET['idCellier']) && empty($_GET['paysOption'])  && empty($_GET['typeOption'])){ //tous les param sont vide
			$data = $bte->getListeBouteilleCellier();
			

		}elseif(empty($_GET['idCellier']) && !empty($_GET['paysOption']) && !empty($_GET['typeOption'])){ //pays+type
			$data = $bte->getListeBouteilleCellier($_GET['idCellier']='',$_GET['paysOption'],$_GET['typeOption']);
			

		}elseif (!empty($_GET['idCellier']) && !empty($_GET['paysOption']) && empty($_GET['typeOption'])){//pays+cellier
			$data = $bte->getListeBouteilleCellier($_GET['idCellier'],$_GET['paysOption'],$_GET['typeOption']='');
			

		}elseif(!empty($_GET['idCellier']) && empty($_GET['paysOption']) && empty($_GET['typeOption'])){//cellier
			$data = $bte->getListeBouteilleCellier($_GET['idCellier'],$_GET['paysOption']='',$_GET['typeOption']='');
			

		}elseif (empty($_GET['idCellier']) && empty($_GET['paysOption']) && !empty($_GET['typeOption'])){//type
			$data = $bte->getListeBouteilleCellier($_GET['idCellier']='',$_GET['paysOption']='',$_GET['typeOption']);
			

		}
		elseif (empty($_GET['idCellier']) && !empty($_GET['paysOption']) && empty($_GET['typeOption'])){//pays
			$data = $bte->getListeBouteilleCellier($_GET['idCellier']='',$_GET['paysOption'],$_GET['typeOption']='');
			

		}
		elseif (!empty($_GET['idCellier']) && !empty($_GET['paysOption']) && !empty($_GET['typeOption'])){//pays+cellier+type

			$data = $bte->getListeBouteilleCellier($_GET['idCellier'],$_GET['paysOption'],$_GET['typeOption']);
			
		}
			$tousCelliers = $bte->lireCelliers();

		include("vues/entete.php");
		include("vues/cellier.php");
		include("vues/pied.php");
	}

	private function listeBouteille()
	{
		$bte = new Bouteille();
		$cellier = $bte->getListeBouteilleCellier();
		return json_encode($cellier);
	}

	private function autocompleteBouteille()
	{
		$bte = new Bouteille();
		//var_dump(file_get_contents('php://input'));
		$body = json_decode(file_get_contents('php://input'));
		//var_dump($body);
		$listeBouteille = $bte->autocomplete($body->nom);

		echo json_encode($listeBouteille);
	}
	private function ajouterNouvelleBouteilleCellier()
	{
		$body = json_decode(file_get_contents('php://input'));
		//var_dump($body);
		if (!empty($body)) {
			$bte = new Bouteille();
			//var_dump($_POST['data']);

			//var_dump($data);
			$resultat = $bte->ajouterBouteilleCellier($body);
			echo json_encode($resultat);
		} else {
			$data = $this->listeBouteille();
			include("vues/entete.php");
			include("vues/ajouter.php");
			include("vues/pied.php");
		}
	}

	private function boireBouteilleCellier()
	{
		$body = json_decode(file_get_contents('php://input'));

		$bte = new Bouteille();
		$resultat = $bte->modifierQuantiteBouteilleCellier($body->id_bouteille, -1, $body->id_cellier);
		echo json_encode($resultat);
	}

	private function ajouterBouteilleCellier()
	{
		$body = json_decode(file_get_contents('php://input'));

		$bte = new Bouteille();
		$resultat = $bte->modifierQuantiteBouteilleCellier($body->id_bouteille, 1, $body->id_cellier);
		echo json_encode($resultat);
	}

	private function consulterQuantiteBouteilleCellier($id_bouteille, $id_cellier)
	{
		$bte = new Bouteille();
		$resultat = $bte->getQuantiteById($id_bouteille, $id_cellier);
		echo json_encode($resultat);
	}

	private function authentification() {
		include("vues/entete_basique.php");
		include("vues/authentification.php");
		include("vues/pied.php");
	}

	private function nouveauUtilisateur() {
		include("vues/entete_basique.php");
		include("vues/nouveauUtilisateur.php");
		include("vues/pied.php");
	}

	private function getListeCelliers() {
		$bte = new Bouteille();
		$data = $bte->getListeCelliers();
		$data = json_encode($data);
		include("vues/entete.php");
		include("vues/ajouter_cellier.php");
		include("vues/pied.php");
	}

	private function ajouterNouveauCellier($id_utilisateur, $nom_cellier) {
		$bte = new Bouteille();
		$data = $bte->ajouterCellier($id_utilisateur, $nom_cellier);
		return $data; 
	}

	private function modifierCellier($nom_cellier, $id_cellier) {
		$bte = new Bouteille();
		$data = $bte->modifierCellier($nom_cellier, $id_cellier);
		return $data; 
	}

	private function supprimerCellier ($id_cellier) {
		$bte = new Bouteille();
		$data = $bte->supprimerCellier($id_cellier);
		return $data; 
	}
}
