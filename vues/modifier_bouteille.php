<?php 
$arrInfosBouteille = json_decode(json_encode($data),true);
$arrayC=[];
$decode = json_decode($dataCellier, true);
foreach($decode as $row){
   array_push($arrayC, $row['id']);
}
$id = null;
if ( isset( $_GET['id_cellier'] ) && !empty( $_GET['id_cellier'] ) ){
    $id = trim($_GET['id_cellier']);
 }
?>
<div class="modifierBouteille"> <?php
    foreach ($arrInfosBouteille as $cle => $bouteille) {?>
        <div>Modification de la bouteille:<h4><span><?php echo $bouteille['nom']?> <input type='text' value="<?php echo $bouteille['id_bouteille'] ?>"></span></h4></div>          
            <p>Num Cellier
                <select id="cellier" name="tri_cellier" class="tri_cellier"> 
                    <option disabled selected value="-1"> -- selectionner une option -- </option>
                    <?php foreach ($arrayC as $cellier) {?>
                    <option value="<?php echo $cellier; ?>"<?php echo $id === $cellier ? "selected" : "" ?>><?php echo $cellier; ?></option>
                    <?php } ?>
                </select>
            </p>
            <p>Quantite <input type="text" name="quantite" value="<?php echo $bouteille['quantite']?>" /></p>
            <p>Date d'achat <input type="date" name="date_achat" value="<?php echo $bouteille['date_achat'] ?>" /></p>
            <p>Millesime <input type="text" name="millesime" value="<?php echo $bouteille['millesime'] ?>" /></p>
            <p>garde_jusqua <input type="text" name="garde_jusqua" value="<?php echo $bouteille['garde_jusqua'] ?>" /></p>
            <button class="modifier_bouteille" id='modifier_bouteille' data-id="modifier_bouteille" name='modifier_bouteille'>Modifier</button>
    <?php } ?>
</div>   
