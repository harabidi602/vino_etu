<div class="ajouterCel">
    <div>
        <img class="imageNC" src="img/newUsager.png" alt="Image Utilisateur">
        <h4>Gestion des utilisateurs</h4>
    </div>
    <?php
        //Transformer le résultat de Json en array 
        //$arr = json_decode($data, true);
    ?>
    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Identifiant</th>
                <th>Courriel</th>
                <th>Téléphone</th>
                <th>Type</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($arr as $cellier) : ?>
            <tr>
                <td data-column="NomUti"><input type="text" class="nomCellier" value="<?php echo ?>"></td>
                <td data-column="PrenomUti"><input type="text" class="nomCellier" value="<?php echo ?>"></td>
                <td data-column="identifiantUti"><input type="text" class="nomCellier" value="<?php echo ?>"></td>
                <td data-column="courrielUti"><input type="text" class="nomCellier" value="<?php echo ?>"></td>
                <td data-column="teleUti"><input type="text" class="nomCellier" value="<?php echo ?>"></td>
                <td data-column="typeUti"><input type="text" class="nomCellier" value="<?php echo ?>"></td>
                <td data-column="Actions">
                    <button class="btn"><i class="fa fa-wrench" aria-hidden="true" name="modifierButton"></i></button>
                    <button class="btn"><i class="fa fa-trash" aria-hidden="true" name="suprimmerButton" ></i></button>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>