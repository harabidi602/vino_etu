<?php
$utilisateurConnecte = json_decode($data, true);
?>
<div class="bouteille">
    <div class="modifier_bouteille"><h4>Mon compte</h4>
        <input type='hidden' value="<?php echo $utilisateurConnecte['id'] ?>" name="id">
        <p>
            <span>Nom</span>
            <input type="text" name="nomUser" value="<?php echo $utilisateurConnecte['nom'] ?>" />
            <span class="erreur" id="erreurNom"></span></p>
        <p>
            <span>Prenom</span>
            <input type="text" name="prenomUser" value="<?php echo $utilisateurConnecte['prenom'] ?>" />
            <span class="erreur" id="erreurNom"></span></p>
        <p>
            <span>Identifiant</span>
            <input type="text" name="identifiantUser" value="<?php echo $utilisateurConnecte['identifiant'] ?>" />
            <span class="erreur" id="erreurIdentifiant"></span>
        </p>
        <p>
            <span>mot de passe</span>
            <input type="password" name="mdpUser" id="mdpUser" value="<?php echo $utilisateurConnecte['mdp'] ?>" />
            <span class="erreur" id="erreurMdp"></span>
        </p>
        <p>
            <button class="modif_utilisateur" id='modif_utilisateur' data-id="modif_utilisateur" name='modif_utilisateur'>Modifier</button>
            <button class="retour_utilisateur" id='retour_utilisateur' data-id="retour_utilisateur" name='retour_utilisateur'>Retour</button>

        </p>
    </div>
</div>
<div id="center_container">
    <div id="center">
        <div>Modification effectuée avec succès</div>
        <span id="close_center">X</span>
    </div>
</div>