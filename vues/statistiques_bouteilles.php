<?php
    //Transformer le résultat de Json en array 
    $arr = json_decode($dataBouteilles, true);?>
<div class="usager"><h4>Le nombre bouteille bu ou ajoutée dans un temps donné</h4>
    <div class="filtreBouteilles">
        <input type="radio" id="bouteilleT" name="actionBouteille" value="bouteilleT" checked>
        <label for="bouteilleT">Toutes les bouteilles</label><br>
        <input type="radio" id="bouteilleB" name="actionBouteille" value="bouteilleB">
        <label for="bouteilleB">Bouteilles bus</label><br>
        <input type="radio" id="bouteilleA" name="actionBouteille" value="bouteilleA">
        <label for="bouteilleA">Bouteilles ajoutées</label><br>
               
        <p>Intervalle de temps</p>
        <select name="intervalle" id="intervalle" class="intervalleT">
            <option selected value="-1"> -- selectionner une option -- </option>
            <option value="jour">Jour</option>
            <option value="semaine">Semaine</option>
            <option value="mois">Mois</option>
            <option value="annee">Année</option>
        </select>
    </div>
    <table id="tableBouteilles">
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
 </div>
 

    