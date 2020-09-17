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
                $this->isAuth();
				$this->listeBouteille();
				break;
			case 'autocompleteBouteille':
                $this->isAuth();
				$this->autocompleteBouteille();
				break;
			case 'ajouterNouvelleBouteilleCellier':
                $this->isAuth();
				$this->ajouterNouvelleBouteilleCellier();
				break;
			case 'ajouterBouteilleCellier':
                $this->isAuth();
				$this->ajouterBouteilleCellier();
				break;
			case 'boireBouteilleCellier':
                $this->isAuth();
				$this->boireBouteilleCellier();
				break;
			case 'consulterQuantiteBouteilleCellier':
                $this->isAuth();
				$this->consulterQuantiteBouteilleCellier($_GET['id_bouteille'], $_GET['id_cellier']);
				break;
			case 'accueil':
                $this->isAuth();
				$this->accueil();
				break;	
			case 'nouveauUtilisateur':
				$this->nouveauUtilisateur();
				break;	
			case 'getListeCelliers':
                $this->isAuth();
				$this->getListeCelliers();	
				break;	
			case 'ajouterNouveauCellier':
                $this->isAuth();
				$body = json_decode(file_get_contents('php://input'));
				$this->ajouterNouveauCellier(1, $body->nom_cellier);	
				break;
			case 'actualiserCellier':
                $this->isAuth();
				$body = json_decode(file_get_contents('php://input'));
				$this->modifierCellier($body->nom_cellier, $body->id_cellier);	
				break;
			case 'supprimerCellier':
                $this->isAuth();
				$body = json_decode(file_get_contents('php://input'));
				$this->supprimerCellier($body->id_cellier);	
				break;	
            case 'reinitialiserMdp':
				$this->reinitialiserMdp();
				break;    
			default:
                $this->authentification();
				break;
		}
	}

	private function accueil(){
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

	/*{
		$bte = new Bouteille();
		if(empty($_GET['idCellier']) && empty($_GET['paysOption'])  && empty($_GET['typeOption'])){ //tous les param sont vide
			$data = $bte->getListeBouteilleCellier();
			

		}elseif(empty($_GET['idCellier']) && !empty($_GET['paysOption']) && !empty($_GET['typeOption'])){ //pays+type
			$data = $bte->getListeBouteilleCellier($_GET['idCellier']='',$_GET['paysOption'],$_GET['typeOption']);
			

		}elseif (!empty($_GET['idCellier']) && !empty($_GET['paysOption']) && empty($_GET['typeOption'])){//pays+cellier
			$data = $bte->getListeBouteilleCellier($_GET['idCellier'],$_GET['paysOption'],$_GET['typeOption']='');
			

		}elseif(!empty($_GET['idCellier']) && empty($_GET['paysOption']) && empty($_GET['typeOption'])){//cellier
			$data = $bte->getListeBouteilleCellier($_GET['idCellier'],$_GET['paysOption']='',$_GET['typeOption']='');
			//var_dump($data);

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
	}*/

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
    
    // La fonction contrôle l'authentification 
	private function authentification() {
        
        $auth = new Authentication();
        
        if (isset($_POST['envoi'])) {

        $identifiant = trim($_POST['identifiant']);
        $mot_de_passe = trim($_POST['mdp']); 
            
        if (!empty($auth->sqlIdentificationUtilisateur($identifiant, $mot_de_passe))) {
            
        $rows=$auth->sqlVinoUtilisateur($identifiant);
        $type=$rows['id_type'];  
        //var_dump($type);     
           
        $_SESSION['utilisateur_identifiant'] = $identifiant; 
        //var_dump($_SESSION['utilisateur_identifiant']);    
           
        if ($type == 1){
        $this->accueil();
        exit;    
        } 
        elseif ($type == 2){
        $this->ajouterNouvelleBouteilleCellier();
        exit;        
        }     
        }
        else {  
        $erreur = "Identifiant ou mot de passe incorrect.";     
        }
        } 
        
		include("vues/entete_basique.php");
		include("vues/authentification.php");
		include("vues/pied.php");
	}
    
    // La fonction ajoute un utilisateur
	private function nouveauUtilisateur() {
        
        $auth = new Authentication();
        
        if (count($_POST) !== 0) {
         
        $oUtilisateur = new Utilisateur($_POST['nom'],$_POST['prenom'],$_POST['identifiant'],$_POST['mdp'],$_POST['courriel'],$_POST['telephone']);
        $erreurs = $oUtilisateur->erreurs; 
                      
        if (count($erreurs) === 0) {
            
        $iden = trim($_POST['identifiant']);    
        $rows=$auth->sqlVinoUtilisateur($iden);    
        $tiden=$rows['identifiant'];   
            
        if ($tiden == $iden) { 
        $message = "L'utilisateur avec cet identifiant déjà existe dans le système";      
        unset($_POST);
        }    
        elseif ($tiden != $iden) {   
            
        $auth->sqlAjouterUtilisateur($oUtilisateur->nom,$oUtilisateur->prenom,$oUtilisateur->identifiant,$oUtilisateur->mdp,$oUtilisateur->courriel,$oUtilisateur->telephone,2);
        $message = "Utilisateur ajouté";
        unset($_POST);    
        }
        else {
        $message = "Utilisateur n'est pas ajouté";   
        unset($_POST);    
        }    
        }   
        } else {
        $erreurs = [];
        $oUtilisateur = new Utilisateur;
        }  
        
		include("vues/entete_basique.php");
		include("vues/nouveauUtilisateur.php");
		include("vues/pied.php");
	}

    
    // La fonction pour redirection vers la page index.php pour la saisie de l'identifiant et du mot de passe  
    private function isAuth()
	{
        if (!$_SESSION['utilisateur_identifiant']) {
            
        header('Location: index.php'); }
    }
    
    // La fonction pour déconnecter
    private function quitter()
	{
        
      session_start();
      unset($_SESSION['identifiant_utilisateur']); 
      session_destroy();
      header('Location: index.php');   
        
	}
    
    // La fonction réinitialise le mot de passe d'utilisateur
    private function reinitialiserMdp()
	{
   
        $auth = new Authentication();
        
        if (isset($_POST['reinitialise']) && isset($_POST['identifiant']) && isset($_POST['courriel'])){

        $iden = trim($_POST['identifiant']);
        $courriel = trim($_POST['courriel']);    
            
        $rows=$auth->sqlVinoUtilisateur($iden);
        $tiden=$rows['identifiant'];
        $tcourriel = $rows['courriel'];  
            
    
        if ($tiden == $iden && $tcourriel == $courriel ) { 
        $longueur = 8;
        $caracteres = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';    
        $mdp = substr(str_shuffle($caracteres), 0, $longueur); 
            
        if ($auth->sqlReinitialiserMdp($iden,$mdp) === true){
           $message = "Le mot de passe a été réinitialisé.Votre nouveau mot de passe: <br />".$mdp;
           unset($_POST);
        }  else {
           $message = "Il ya de probleme avec mot de passe";
           unset($_POST);
        }} else {
        $message = "L'utilisateur avec cet identifiant n'existe pas dans le système"; 
        unset($_POST);     
        }    
            
	}
        include("vues/entete_basique.php");
		include("vues/reinitialiserMdp.php");
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
		if(!$data) {
			http_response_code(417);
		}
	}
}
