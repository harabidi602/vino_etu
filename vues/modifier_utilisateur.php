<?php
$utilisateur = json_decode($data, true);
?>
<div class="bouteille">
    <h4><span>Modification de l'utilisateur :<?php echo $utilisateur[0]['prenom'] . " " . $utilisateur[0]['nom']; ?></span></h4>
    <div class="modifier_bouteille">
        <input type='hidden' value="<?php echo $utilisateur[0]['id'] ?>" name="utilisateur_id">
        <p>
            <span>Nom</span>
            <input type="text" name="nom" value="<?php echo $utilisateur[0]['nom'] ?>" />
            <span class="erreur" id="erreurNom"></span></p>
        <p>
            <span>Prenom</span>
            <input type="text" name="prenom" value="<?php echo $utilisateur[0]['prenom'] ?>" />
            <span class="erreur" id="erreurNom"></span></p>
        <p>
            <span>Identifiant</span>
            <input type="text" name="identifiant" value="<?php echo $utilisateur[0]['identifiant'] ?>" />
            <span class="erreur" id="erreurIdentifiant"></span>
        </p>
        <p>
            <span>Type</span>
            <select id="type">
                <option value="1" <?php if ($utilisateur[0]['id_type'] == 1) { ?> selected <?php } ?>>Administrateur</option>
                <option value="2" <?php if ($utilisateur[0]['id_type'] == 2) { ?> selected <?php } ?>>Usager</option>
            </select>
        </p>
        <p>
            <span>Activation</span>
            <select id="activation">
                <option value="0" <?php if ($utilisateur[0]['activation'] == 0) { ?> selected <?php } ?>> 0 - Désactiver</option>
                <option value="1" <?php if ($utilisateur[0]['activation'] == 1) { ?> selected <?php } ?>> 1 - Activer</option>
            </select>
        </p>
        <p>
            <button class="modifier_utilisateur" id='modifier_utilisateur' data-id="modifier_utilisateur" name='modifier_utilisateur'>Modifier</button>
        </p>
    </div>
</div>
<div id="center_container">
    <div id="center">
        <div>Modification effectuée avec succès</div>
        <span id="close_center">X</span>
    </div>
</div>