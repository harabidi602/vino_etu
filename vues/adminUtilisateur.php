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
                <label>Nom</label>
                <p><input class="inputForm" name="nom" required> </p>
                <p><?= isset($erreurs['nom']) ? $erreurs['nom'] : "" ?></p>
                <label>Prénom</label>
                <p><input class="inputForm" name="prenom" required></p>
                <p><?= isset($erreurs['prenom']) ? $erreurs['prenom'] : "" ?></p>
                <label>Identifiant</label>
                <p><input class="inputForm" name="identifiant" required> </p>
                <p><?= isset($erreurs['identifiant']) ? $erreurs['identifiant'] : "" ?></p>
                <label>Mot de passe</label>
                <p><input class="inputForm" type="password" name="mdp" required></p>
                <p><?= isset($erreurs['mdp']) ? $erreurs['mdp'] : "" ?></p>
                <label>Email</label>
                <p><input class="inputForm" type="email" name="courriel" required> </p>
                <p><?= isset($erreurs['courriel']) ? $erreurs['courriel'] : "" ?></p>
                <label>Téléphone</label>
                <p><input class="inputForm" name="telephone" required></p>
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