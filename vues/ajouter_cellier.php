<div class="ajouterCel">
    <h2>Ajouter un nouveau cellier </h2>
    <div class="gestionCellier">
        <div class="formCellier" >
            <p><input class="inputForm" name="nomCellier" placeholder="Nom du nouveau Cellier"> </p>
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
            <th>Actions</th>
        </tr>
        <?php foreach ($arr as $cellier) : ?>
            <tr>
                <td><?php echo $cellier['id'] ?></td>
                <td><?php echo $cellier['nom_cellier'] ?></td>
                <td>
                    <button type="" class="buttonModSup">Modifier</button>
                
                    <button type="" class="buttonModSup">Supprimer</button>
                </td>
            </tr>
            <?php endforeach; ?>	
    </table>
</div>