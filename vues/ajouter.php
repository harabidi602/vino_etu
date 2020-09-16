<div class="ajouter">

    <div class="nouvelleBouteille" vertical layout>
        Recherche : <input type="text" name="nom_bouteille">
        <ul class="listeAutoComplete">

        </ul>
        <?php
        //Transformer le résultat de Json en array 
        $arr = json_decode($data, true);
        //var_dump($arr[0]['id_cellier']);
        ?>
        <div>
            <p>Nom : <span data-id="" class="nom_bouteille"></span></p>
            <p>Cellier : <select id="cellier"> <?php foreach ($arr as $cle => $cellier) { ?> //Récupérer les différents id_cellier de la BD
                        <option value="<?php echo $cellier['id_cellier'];  ?>"><?php echo $cellier['id_cellier']; ?></option>
                    <?php } ?>
                </select></p>
            <p>Millesime : <input name="millesime"></p>
            <p>Quantite : <input name="quantite" value="1"></p>
            <p>Date achat : <input name="date_achat"></p>
            <p>Prix : <input name="prix"></p>
            <p>Garde : <input name="garde_jusqua"></p>
            <p>Notes <input name="notes"></p>
        </div>
        <button name="ajouterBouteilleCellier">Ajouter la bouteille</button>
    </div>
</div>
</div>