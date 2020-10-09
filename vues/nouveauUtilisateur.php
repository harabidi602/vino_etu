<div class="usager">
    <h4>Créez un nouveau usager</h4>
    <form id="nutilisateur" action="" method="post">
        <?php if (!empty($succes)) : ?>
        <?php header('Location: index.php'); ?>
        <?php endif;?>
        <p> <input name="date_inscription" type="hidden" id="dateActuelle">
            <span>Nom</span><input class="inputForm" name="nom" placeholder="Entre 2 et 25 caractères alphabétiques M ou m" required>
            <span class="erreur"><?= isset($erreurs['nom']) ? $erreurs['nom'] : "" ?></span>
        </p>
        <p>
            <span>Prénom</span><input class="inputForm" name="prenom" placeholder="Entre 2 et 25 caractères alphabétiques M ou m" required>
            <span class="erreur"> <?= isset($erreurs['prenom']) ? $erreurs['prenom'] : "" ?></span>
        </p>
        <p>
            <span>Identifiant</span> <input class="inputForm" name="identifiant" placeholder="Entre 3 et 16 caractères alphabétiques M ou m" required>
            <span class="erreur"><?= isset($erreurs['identifiant']) ? $erreurs['identifiant'] : "" ?></span>
        </p>
        <p>
            <span>Mot de passe</span> <input class="inputForm" type="password" name="mdp" placeholder="8 caractères ou plus M ou m" required>
            <span class="erreur"><?= isset($erreurs['mdp']) ? $erreurs['mdp'] : "" ?></span>
        </p>
        <p><button type="submit" class="creationButton" name="creer" id='creerUsager'>Créez</button></p>

        <p>Si vous avez déjà un compte <a href="index.php"> Identifiez-vous </a>
            <p>
    </form>
</div>
