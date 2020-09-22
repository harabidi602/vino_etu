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
                <td data-column="Id Cellier" class="idCellier"><?php echo $cellier['id'] ?></td>
                <td data-column="Nom Cellier"><input type="text" class="nomCellier" value="<?php echo $cellier['nom_cellier'] ?>"></td>
                <td data-column="Actions">
                    <button class="btn"><i class="fa fa-wrench" aria-hidden="true" name="modifierButton"></i></button>
                    <button class="btn"><i class="fa fa-trash" aria-hidden="true" name="suprimmerButton" ></i></button>
                </td>
            </tr>
         <?php endforeach; ?>
        </tbody>
    </table>
</div>