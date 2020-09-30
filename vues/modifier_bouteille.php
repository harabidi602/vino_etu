<?php 
$arrInfosBouteille = json_decode(json_encode($data),true);
foreach ($arrInfosBouteille as $cle => $bouteille) {?>
<div class="bouteille"><h4><span>Modification de la bouteille :<?php echo $bouteille['nom']?></span></h4>
    <div class="modifier_bouteille" >
        <input type='hidden' value="<?php echo $bouteille['id_bouteille'] ?>" name="bouteille_id">
        <input type='hidden' value="<?php echo $bouteille['id_cellier'] ?>" name="id_cellier">
            <p>
                <span>Quantite</span>
                <input name="quantite" value="<?php echo $bouteille['quantite']?>" class="quantite" min='1' type="number"/>
                <span class="erreur" id="erreurQuan"></span></p>
            <p><span>Date d'achat</span><input type="date" name="date_achat" value="<?php echo $bouteille['date_achat'] ?>" class="date_achat" /></p>
            <p>
                <span>Millesime</span>
                <input type="text" name="millesime" value="<?php echo $bouteille['millesime'] ?>" />
                <span class="erreur" id="erreurMil"></span>
            </p>
            <p>
                <span>jusque</span>
                <input type="text" name="garde_jusqua" value="<?php echo $bouteille['garde_jusqua'] ?>" />
                <span class="erreur" id="erreurGarde"></span>
            </p>
            <p>
                <span>Notes</span>
                <input type="text" name="notes" value="<?php echo $bouteille['notes'] ?>" />
                <span class="erreur" id="erreurNotes"></span>
            </p>
            <p>
                <span>Prix</span>
                <input type="text" name="prix" value="<?php echo $bouteille['prix'] ?>" />
                <span class="erreur" id="erreurPrix"></span>
            </p>
            <p>
                <button class="modifier_bouteille" id='modifier_bouteille' data-id="modifier_bouteille" name='modifier_bouteille'>Modifier</button>
            </p>
    </div> 
</div>  
<div id="center_container">
        <div id="center">
            <div>Modification effectuée avec succès</div>
            <span id="close_center">X</span>
        </div>
    </div>
<?php }?>
