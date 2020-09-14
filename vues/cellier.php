<?php
$arr = json_decode(json_encode($data), true);
$arrCelliers = json_decode(json_encode($tousCelliers), true);

$arrayId = [];
$arrayC = [];
/*$arrayType =[]; 
$arrayQte=[];
$arrayPays=[];
$arrayMillesime=[];*/
foreach ($arr as $key => $cellier) {
    array_push($arrayId, $cellier['id_cellier']);
    /*array_push($arrayType, $cellier['type']);
    array_push($arrayQte, $cellier['quantite']);
    array_push($arrayPays, $cellier['pays']);
    array_push($arrayMillesime, $cellier['millesime']);*/
}
foreach ($arrCelliers as $key => $tousCelliers) {
    array_push($arrayC, $tousCelliers['id']);
}

$arrayId = array_unique($arrayId);
//var_dump($cellier);
/*$arrayType = array_unique($arrayType);
$arrayQte = array_unique($arrayQte);
$arrayPays = array_unique($arrayPays);
$arrayMillesime = array_unique($arrayMillesime);*/

?>

<section class="cellier">
    <nav>
        <ul>
            <!--  <li><a href="?requete=ajouterNouvelleBouteilleCellier">Ajouter une bouteille au cellier</a></li> -->
            <li><a href="#">Ajouter un nouveau cellier</a></li>
            <li><label>Choisir un cellier</label>
                <select id="cellier" name="tri_cellier" class="cellierSelected">
                    <option disabled selected value="-1"> -- selectionner une option -- </option>
                    <?php
                    foreach ($arrayC as $cellier) {
                    ?> //Récupérer les différents id_cellier de la BD
                        <option value="<?php echo $cellier;  ?>"><?php echo $cellier; ?></option>
                    <?php } ?>
                </select></li>
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