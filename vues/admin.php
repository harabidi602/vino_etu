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
                <th>Identifiant <i>(Unique)</i></th>
                <th>Type du compte</th>
                <th>Activation <i>(1:actif, 0:inactif)</i></th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($arr as $item) :  ?>
                <tr>
                    <td data-column="NomUti"><?php echo $item['nom']; ?></td>
                    <td data-column="PrenomUti"><?php echo $item['prenom']; ?></td>
                    <td data-column="identifiantUti"><?php echo $item['identifiant']; ?></td>
                    <td data-column="typeUti"><?php echo $item['type']; ?></td>
                    <td data-column="activationUti"><?php echo $item['activation']; ?></td>
                    <td data-column="idUtil" style="display:none;"><?php echo $item['id']; ?></td>
                    <td data-column="Actions">
                        <button class="btn"><i class="fa fa-pencil-alt" aria-hidden="true" name="modifierUtil"></i></button>
                        <button class="btn"><i class="fa fa-trash" aria-hidden="true" name="supprimerUtil"></i></button>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>