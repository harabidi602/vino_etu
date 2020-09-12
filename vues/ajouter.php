<div class="ajouter">

    <div class="nouvelleBouteille" vertical layout>
        <div>Rechercher : <input type="text" name="nom_bouteille">
        <ul class="listeAutoComplete"></ul> </div>
        <?php
        //Transformer le résultat de Json en array 
        $arr = json_decode($data, true);

        $arrayId = []; 
        
        foreach($arr as $key => $cellier) {
            array_push($arrayId, $cellier['id_cellier']);
        }

        $arrayId = array_unique($arrayId);  
        ?>
        <div>
            <ul class="infoBouteille">
                <li class="item-bouteille"><label>Nom : </label><span data-id="" class="nom_bouteille"></span></li>
                <li  class="item-bouteille"><label>Cellier : </label><select id="cellier"> <?php foreach ($arrayId as $cle => $cellier) { ?> //Récupérer les différents id_cellier de la BD
                        <option value="<?php echo $cellier;  ?>"><?php echo $cellier; ?></option>
                    <?php } ?>
                </select></li>
                <li  class="item-bouteille"><label> Millesime: <input name="millesime"></label></li>
                <li  class="item-bouteille"><label> Quantite : <input name="quantite" value="1"></label></li>
                <li  class="item-bouteille"><label> Date achat : <input name="date_achat"></label></li>
                <li  class="item-bouteille"><label> Prix : <input name="prix"></label></li>
                <li  class="item-bouteille"><label> Garde : <input name="garde_jusqua"></label></li>
                <li  class="item-bouteille"><label> Notes <input name="notes"></label></li>
                <li  class="item-bouteille"><button name="ajouterBouteilleCellier">Ajouter la bouteille</button></li>
            </ul>
        </div>
        
    </div>
</div>
</div>