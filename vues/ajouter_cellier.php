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
      $arr = json_decode($data, true);
    ?>
    <table>
        <thead>
            <tr>
                <th>Id Cellier</th>
                <th>Nom Cellier</th>
                <th>Nombre total de bouteilles</th>
                <th>Prix moyen des bouteilles</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($arr as $cellier) : ?>
            <tr>
                <td data-column="Id Cellier" class="idCellier"><?php echo $cellier['id'] ?></td>
                <td data-column="Nom Cellier" class="nomCellier"><?php echo $cellier['nom_cellier'] ?></td>
                <td data-column="Bout Cellier" class="boutCellier"><?php echo $cellier['totalBouteilles'] ?></td>
                <td data-column="Moyenne Prix" class="boutCellier"><?php echo $cellier['AvgPrix'] ?></td>
                <td data-column="Actions">
                    <button class="btn"><i class="fas fa-pencil-alt" name="modifierButton"></i></button>
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
    <div id="center_container">
        <div id="center">
            <div>Modification effectuée avec succès</div>
            <span id="close_center">X</span>
        </div>
    </div>
</div>