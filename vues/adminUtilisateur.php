<div class="authentification">
    <div class="formA">
        <div class="formAuthentification" >
            <div class="titre">
                <h1>Créez nouveau utilisateur</h1>
            </div>
            <form id="nutilisateur" action="" method="post">
                <?php if(!empty($message)):?>
                <p><?php echo $message;?></p>
                <?php endif; ?>
                <p><input class="inputForm" name="nom" placeholder="Nom" required> </p>
                <p><?= isset($erreurs['nom']) ? $erreurs['nom'] : "" ?></p>
                <p><input class="inputForm" name="prenom" placeholder="Prénom" required></p>
                <p><?= isset($erreurs['prenom']) ? $erreurs['prenom'] : "" ?></p>
                <p><input class="inputForm" name="identifiant" placeholder="Identifiant" required> </p>
                <p><?= isset($erreurs['identifiant']) ? $erreurs['identifiant'] : "" ?></p>
                <p><input class="inputForm" type="password" name="mdp" placeholder="Mot de passe" required></p>
                <p><?= isset($erreurs['mdp']) ? $erreurs['mdp'] : "" ?></p>
                <p><input class="inputForm" type="email" name="courriel" placeholder="Email" required> </p>
                <p><?= isset($erreurs['courriel']) ? $erreurs['courriel'] : "" ?></p>
                <p><input class="inputForm" name="telephone" placeholder="Téléphone" required></p>
                <p><?= isset($erreurs['telephone']) ? $erreurs['telephone'] : "" ?></p>
                <select name="type">
                <option value="">--Veuillez choisir une option--</option>
                <option value="administrateur">Administrateur</option>
                <option value="usager">Usager</option>
                </select>

                <div class="contentForm">
                    <button type="submit" class="creationButton" name="creer">Créez</button>
                </div>
            </form>       
        </div>
    </div>
</div>