<?php

$arr = json_decode(json_encode($data),true);
$arrCelliers = json_decode(json_encode($tousCelliers),true);

$arrayId =[];
$arrayC=[];
$arrayP=[];
/*$arrayType =[]; 
$arrayQte=[];

$arrayMillesime=[];*/
//var_dump($data);
foreach($arr as $key => $cellier) {
    array_push($arrayId, $cellier['id_cellier']);
    array_push($arrayP, $cellier['pays']);
   // var_dump($cellier['pays']);
    /*array_push($arrayType, $cellier['type']);
    array_push($arrayQte, $cellier['quantite']);
    
    array_push($arrayMillesime, $cellier['millesime']);*/
}
foreach($arrCelliers as $key =>$tousCelliers){
    array_push($arrayC, $tousCelliers['id']);
}

$arrayId = array_unique($arrayId);
$arrayP = array_unique($arrayP) ;
/*$arrayType = array_unique($arrayType);
$arrayQte = array_unique($arrayQte);
;
$arrayMillesime = array_unique($arrayMillesime);*/
/**/
$id = null;
$p = null;
//isset($_POST['tri_critere']) && $_POST['tri_critere']>0
/**/
         
if ( isset( $_GET['idCellier'] ) && !empty( $_GET['idCellier'] ) ){
   $id = trim($_GET['idCellier']);
}
if ( isset( $_GET['paysOption'] ) && !empty( $_GET['paysOption'] ) ){
    $p = trim($_GET['paysOption']);
 }
//$f = $data->getListeBouteilleCellier($id); 



?>

<section class="cellier">
    <nav>
        <ul>		
            <li><a href="?requete=ajouterNouvelleBouteilleCellier">Ajouter une bouteille au cellier</a></li>
            <li><a href="#">Ajouter un nouveau cellier</a></li>
            <li><label for="tri_cellier">Choisir un cellier</label>
              <select id="cellier" name="tri_cellier" class="tri_cellier"> 
                  <option disabled selected value="-1"> -- selectionner une option -- </option>
                  <?php 
                  foreach ($arrayId as $cellier) { 
                      ?> //Récupérer les différents id_cellier de la BD
                  <option value="<?php echo $cellier; ?>"<?php echo $id === $cellier ? "selected" : "" ?>><?php echo $cellier; ?></option>

                  <?php } ?>
                </select>
             </li>
            <li>
             <label for="pays">Choisir un pays</label>
              <select name="pays" id="pays" class="tri_cellier">
                <option disabled selected value="-1"> -- selectionner une option -- </option>
                  <?php 
                    foreach ($arrayP as $pays) { 
                  ?> 
                  <option value="<?php echo $pays;?>"<?php echo $p === $pays ? "selected" : "" ?>><?php echo $pays; ?></option>
                <?php } ?>
              </select>
             </li>
        <li><a href="?requete=getListeCelliers">Ajouter un nouveau cellier</a></li>
		</ul>
    </nav>
    <?php
    foreach ($data as $cle => $bouteille) {
    ?>
        <article class="bouteille" data-quantite="">
            <div class="img">
                <img src="https:<?php echo $bouteille['image'] ?>">
            </div>
            <ul class="infoBouteille">
                <li><?php echo $bouteille['id_bouteille'] ?></li>
                <li class="nom">Numéro du cellier : <?php echo $bouteille['id_cellier'] ?></li>
                <li class="nom">Nom : <?php echo $bouteille['nom'] ?></li>
                <li class="quantite">Quantité : <?php echo $bouteille['quantite'] ?></li>
                <li class="pays">Pays : <?php echo $bouteille['pays'] ?></li>
                <li class="type">Type : <?php echo $bouteille['type'] ?></li>
                <li class="millesime">Millesime : <?php echo $bouteille['millesime'] ?></li>
                <li><a href="<?php echo $bouteille['url_saq'] ?>">Voir SAQ</a></li>
            </ul>
            <div class="options" data-id_bouteille="<?php echo $bouteille['id_bouteille'] ?>" data-id_cellier="<?php echo $bouteille['id_cellier'] ?>">
                <button>Modifier</button>
                <button class='btnAjouter'>Ajouter</button>
                <button class='btnBoire'>Boire</button>

            </div>
        </article>
    <?php
    }
    ?>
</section>
</div>