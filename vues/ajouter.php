<div class="ajouter">
    <h4>Ajouter une nouvelle bouteille au cellier </h4>
    <div class="nouvelleBouteille" vertical layout>
        <div class="recherche_nom_bouteille">Rechercher par nom : <input type="text" name="nom_bouteille">
        <ul class="listeAutoComplete"></ul> </div>
        <?php
        //Transformer le résultat de Json en array 
        $arr = json_decode($data, true);
        $arrayId = []; 
        foreach($arr as $key => $cellier) {
            array_push($arrayId, $cellier['id_cellier']);
        }
        $arrayId = array_unique($arrayId); ?>
        
        <div class="infoBouteille">
        <p>Nom : <span data-id_bouteille="" class="nom_bouteille"></span></p>
                <p>Num Cellier<select id="cellier"> 
                    <?php foreach ($arrayId as $cle => $cellier) { ?> //Récupérer les différents id_cellier de la BD
                        <option value="<?php echo $cellier;  ?>"><?php echo $cellier; ?></option>
                    <?php } ?>
                </select></p>  
                <p>Millesime : <input name="millesime"></p>
                <p>Quantite : <input name="quantite" value="1"></p>
                <p>Date achat : <input name="date_achat" type="date"></p>
                <p>Prix : <input name="prix"></p>
                <p>Garde : <input name="garde_jusqua"></p>
                <p>Notes <input name="notes"></p>
                <button name="ajouterBouteilleCellier">Ajouter la bouteille</button>
            </div>
        </div>
    </div>
</div>
</div>