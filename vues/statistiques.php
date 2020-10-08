<div class="usager" vertical layout>
<?php
    //Transformer le résultat de Json en array 
    $arr = json_decode($dataBouteilles, true);?>
    <div >
        <h4>Le nombre de bouteilles bues ou ajoutées dans un intervalle de temps</h4>
        <input type="radio" id="bouteilleT" name="actionBouteille" value="bouteilleT" checked>
        <label for="bouteilleT">Toutes les bouteilles</label><br>
        <input type="radio" id="bouteilleB" name="actionBouteille" value="bouteilleB">
        <label for="bouteilleB">Bouteilles bus</label><br>
        <input type="radio" id="bouteilleA" name="actionBouteille" value="bouteilleA">
        <label for="bouteilleA">Bouteilles ajoutées</label><br>
            
        <p>Intervalle de temps</p>
        <select name="intervalleT" id="intervalleT" class="intervalleT">
            <option selected value="-1"> -- selectionner une option -- </option>
            <?php $intervalleSelectionne = isset($_GET['intervalle']) ? $_GET['intervalle']  : ''; ?>
            <option value="jour" <?php if($intervalleSelectionne == 'jour') {echo 'selected';}?>>Jour</option>
            <option value="semaine" <?php if($intervalleSelectionne == 'semaine') {echo 'selected';}?>>Semaine</option>
            <option value="mois" <?php if($intervalleSelectionne == 'mois') {echo 'selected';}?>>Mois</option>
            <option value="annee" <?php if($intervalleSelectionne == 'annee') {echo 'selected';}?>>Année</option>
        </select>
    </div>
    <table align="center">
        <thead>
            <tr>
                <th>Action</th>
                <th>Quantité</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($arr as $item) :  
                if ($item['actionsBA'] == 1) {
                    $className = 'bouteilleBuRow';    
                } else {
                    $className = 'bouteilleAjouteeRow'; 
                }?>
                <tr class="dataRow <?php echo $className ?>">
                    <td data-column="Action" class="actionBouteille"><span>
                        <?php 
                            if($item['actionsBA'] == 1) { 
                                echo "Total des bouteilles bus";
                            } else { 
                                echo "Total des bouteilles ajoutées";
                            }; ?> </span></td>
                    <td data-column="Quantite"><span><?php echo $item['quantiteBA']; ?></span></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>    
    <table align="center">
       <h4>Le nombre de bouteilles par cellier</h4>
        <thead>
            <tr>
                <th>Nom cellier</th>
                <th>Nombre de bouteilles</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($btlCellier as $btlCel) : ?>
                <tr>
                    <td data-column="Nom cellier"><span><?php echo $btlCel['nom']; ?></span></td>
                    <td data-column="Nombre de bouteilles"><span><?php echo $btlCel['nombre']; ?></span></td>   
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <table>
       <h4>Le nombre de bouteilles par usager</h4>
        <thead>
            <tr>
                <th>Usager</th>
                <th>Nombre de bouteilles</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($btlUsager as $btlUs) : ?>
                <tr>
                    <td data-column="Usager"><span><?php echo $btlUs['usager']; ?></span></td>
                    <td data-column="Nombre de bouteilles"><span><?php echo $btlUs['nombre']; ?></span></td>   
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
     <table align="center">
       <h4>La valeur de toutes les bouteilles</h4>
        <thead>
            <tr>
                <th>Valeur des bouteilles</th>
            </tr>
        </thead>
        <tbody>
           <?php foreach ($btlVal as $val): ?>
             <td data-column="Valeur de bouteilles"><?php echo $val;?></td>
            <?php endforeach; ?>     
        </tbody>
    </table> 
     <table align="center">
       <h4>La valeur des bouteilles par cellier</h4>
        <thead>
            <tr>
                <th>Nom cellier</th>
                <th>Valeur de bouteilles</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($btlCellierVal as $btlCelVal) : ?>
                <tr>
                    <td data-column="Nom cellier"><span><?php echo $btlCelVal['nom']; ?></span></td>
                    <td data-column="Valeur de bouteilles"><span><?php echo $btlCelVal['valeur']; ?></span></td>   
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <table align="center">
       <h4>La valeur des bouteilles par usager</h4>
        <thead>
            <tr>
                <th>Usager</th>
                <th>Valeur de bouteilles</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($btlUsagerVal as $btlUsVal) : ?>
                <tr>
                    <td data-column="Usager"><span><?php echo $btlUsVal['usager']; ?></span></td>
                    <td data-column="Valeur de bouteilles"><span><?php echo $btlUsVal['valeur']; ?></span></td>   
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>


