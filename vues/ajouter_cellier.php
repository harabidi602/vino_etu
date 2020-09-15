<div class="ajouterCel">
    <h4>Ajouter un nouveau cellier </h4>
    <div class="gestionCellier">
        <div class="formCellier" >
            <p><input name="nomCellier" placeholder="Nom du nouveau Cellier"> </p>
            <button type="button" id="buttonAjouterCellier" class="ajouterCellierButton">Ajouter</button>
        </div>
    </div>
    
    <?php
        //Transformer le résultat de Json en array 
        $arr = json_decode($data, true);
    ?>
    <table>
        <tr>
            <th>Id Cellier</th>
            <th>Nom Cellier</th>
            <th>Id Bouteille</th>
            <th>Nom Bouteille</th>
            <th>Modification</th>
            <th>Suppression</th>
        </tr>
        <?php foreach ($arr as $cellier) : ?>
            <tr>
                <td><?php echo $cellier['id_cellier'] ?></td>
                <td><?php echo $cellier['nom_cellier'] ?></td>
                <td><?php echo $cellier['id_bouteille'] ?></td>
                <td><?php echo $cellier['nom'] ?></td>
                <td>
                    <button type="" class="ajouterCellierButton ajouterCellierButtonMod">Modifier</button>
                </td>
                <td>
                    <button type="" class="ajouterCellierButton ajouterCellierButtonMod">Supprimer</button>
                </td>
            </tr>
            <?php endforeach; ?>	
    </table>
</div>