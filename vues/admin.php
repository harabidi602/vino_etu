<section class="cellier">
    <nav>
        <ul>
            <li><a align="left" href="?requete=nouveauAdminUtilisateur">Ajouter un nouveau utilisateur</a></li>
        </ul>
    </nav>
</section>

<div class="ajouterCel">
    <div>
        <img class="imageNC" src="img/newUsager.png" alt="Image Utilisateur">
        <h4>Gestion des utilisateurs</h4>
    </div>
    <?php
    //Transformer le résultat de Json en array 
    $arr = json_decode($data, true);
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
            <?php foreach ($arr as $item) :  ?>
                <tr>
                    <td data-column="NomUti"><span><?php echo $item['nom']; ?></span></td>
                    <td data-column="PrenomUti"><span><?php echo $item['prenom']; ?></span></td>
                    <td data-column="identifiantUti"><span><?php echo $item['identifiant']; ?></span></td>
                    <td data-column="courrielUti"><span><?php echo $item['courriel']; ?></span></td>
                    <td data-column="teleUti"><span><?php echo $item['telephone']; ?></span></td>
                    <td data-column="typeUti"><span><?php echo $item['type']; ?></span></td>
                    <td data-column="Actions">
                      <!--  <button class="btn"><i class="fa fa-wrench" aria-hidden="true" name="modifierUtil"></i></button>-->
                        <button class="btn"><i class="fa fa-trash" aria-hidden="true" name="supprimerUtil"></i></button>
                        <input type="hidden" class="nomCellier" value="<?php echo $item['id']; ?>">
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>