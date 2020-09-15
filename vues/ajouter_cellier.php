<div class="ajouterCel">
    <div>
        <img class="imageNC" src="img/cellar.png" alt="Image Cellier">
        <h4>Ajouter un nouveau cellier</h4>
    </div>
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
        <thead>
            <tr>
                <th>Id Cellier</th>
                <th>Nom Cellier</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($arr as $cellier) : ?>
            <tr>
                <td data-column="Id Cellier"><?php echo $cellier['id'] ?></td>
                <td data-column="Nom Cellier"><?php echo $cellier['nom_cellier'] ?></td>
                <td data-column="Actions">
                    <button type="" class="buttonModSup">Modifier</button>
                
                    <button type="" class="buttonModSup">Supprimer</button>
                </td>
            </tr>
         <?php endforeach; ?>
        </tbody>
    </table>
</div>