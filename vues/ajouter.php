 <div class="nouvelleBouteille" vertical layout> 
        <h4>Ajouter une nouvelle bouteille au cellier </h4>
        <div class="recherche_nom_bouteille">Rechercher par nom de bouteille: <input type="text" name="nom_bouteille">
        <ul class="listeAutoComplete"></ul></div>
        <?php
        //Transformer le résultat de Json en array 
        $arrayCelliers = json_decode($dataCellier, true);?>
            <div class="ajoutBouteille">
                <p>Nom: <span id="nomB" data-id_bouteille="" class="nom_bouteille"></span>
                    <div>
                        <span id="erreurNomB"></span></p>
                    </div>
                <p>Num Cellier<select id="cellier"> 
                    <?php foreach ($arrayCelliers as $cellier) { ?> //Récupérer les différents id_cellier de la BD
                        <option value="<?php echo $cellier['id'];?>"><?php echo $cellier['nom_cellier'] ; ?></option>
                    <?php } ?>
                </select></p>  
                <p>Millesime <input name="millesime"></p><span id="erreurMil"></span>
                <p>Quantite <input name="quantite" value="1" type="number" min="1"></p>
                <p>Date achat <input name="date_achat" type="date" id="dateActuelle"></p>
                <p>Prix <input name="prix" id="erreurPrix"></p>
                <p>Garde <input name="garde_jusqua"></p>
                <p>Notes <input name="notes"></p>
                <p><button name="ajouterBouteilleCellier" class="ajouterBouteilleCellier">Ajouter</button></p>
            </div>
            <div id="center_container">
                <div id="center">
                    <div id="messagePer">Ajout effectuée avec succès</div>
                    <span id="close_center">X</span>
                </div>
            </div>
</div>
