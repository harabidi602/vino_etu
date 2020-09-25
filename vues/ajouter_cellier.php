<div class="ajouterCel">
    <div>
        <img class="imageNC" src="img/cellier.png" alt="Image Cellier">
        <h4>Ajouter un nouveau cellier</h4>
    </div>
    <div class="gestionCellier">
        <div class="formCellier" >
            <p><input class="inputForm" name="nomCellier" placeholder="Nom du nouveau Cellier"> </p>
            <button type="button" id="buttonAjouterCellier" class="ajouterCellierButton">Ajouter</button>
        </div>
    </div>
    
    <?php
        $arr = json_decode(json_encode($data),true);
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
                    <?php
                    //quand il n'y a qu'un seul cellier, on ne peut pas l'effacer 
                    if(count($arr) !== 1) { ?>
                        <button class="btn"><i class="fa fa-trash" aria-hidden="true" name="suprimmerButton" ></i></button>
                    <?php } ?>
                </td>
            </tr>
         <?php endforeach; ?>
        </tbody>
    </table>
</div>