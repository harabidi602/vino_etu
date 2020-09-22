<?php 
$arrInfosBouteille = json_decode(json_encode($data),true);
foreach ($arrInfosBouteille as $cle => $bouteille) {?>
<div><h4><span>Modification de la bouteille :<?php echo $bouteille['nom']?></span></h4>
    <div class="modifierBouteille">
        <input type='hidden' value="<?php echo $bouteille['id_bouteille'] ?>" name="bouteille_id">
        <input type='hidden' value="<?php echo $bouteille['id_cellier'] ?>" name="id_cellier">
            <p>Quantite <input type="text" name="quantite" value="<?php echo $bouteille['quantite']?>" class="quantite"/></p>
            <p>Date d'achat <input type="date" name="date_achat" value="<?php echo $bouteille['date_achat'] ?>" class="date_achat" /></p>
            <p>Millesime <input type="text" name="millesime" value="<?php echo $bouteille['millesime'] ?>" /></p>
            <p>garde_jusqua <input type="text" name="garde_jusqua" value="<?php echo $bouteille['garde_jusqua'] ?>" /></p>
            <p>Notes <input type="text" name="notes" value="<?php echo $bouteille['notes'] ?>" /></p>
            <p>Prix <input type="text" name="prix" value="<?php echo $bouteille['prix'] ?>" /></p>
            <button class="modifier_bouteille" id='modifier_bouteille' data-id="modifier_bouteille" name='modifier_bouteille'>Modifier</button>
    </div> 
</div>   
<?php }?>