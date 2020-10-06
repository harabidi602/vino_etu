<div class="nouveauUtil" vertical layout>
    <div class="conteneurImg">
        <img src="img/newUsager.png" alt="">
    </div>
    <h4>Gestion des utilisateurs </h4>
    <a align="left" href="?requete=nouveauAdminUtilisateur">Ajouter un nouveau utilisateur</a>
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
                <th>Type du compte</th>
                <th>Activation</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($arr as $item) :  ?>
                <tr>
                    <td data-column="Nom"><?php echo $item['nom']; ?></td>
                    <td data-column="Prénom"><?php echo $item['prenom']; ?></td>
                    <td data-column="Identifiant"><?php echo $item['identifiant']; ?></td>
                    <td data-column="Type"><?php echo $item['type']; ?></td>
                    <td data-column="activation"><?php echo $item['activation']; ?></td>
                    <td data-column="id" style="display:none;"><?php echo $item['id']; ?></td>
                    <td data-column="Actions">
                        <button class="btn"><i class="fa fa-pencil-alt" aria-hidden="true" name="modifierUtil"></i></button>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>