
<div class="usager" >
    <div class="titre">
        <img src="img/authen.png" alt="Image Authentification">
        <h4>AUTHENTIFICATION</h4>
    </div>
    <form id="authentification" action="" method="post">
        <?php if(!empty($erreur)):?>
        <p><?php echo $erreur; ?></p>
        <?php endif; ?>
        <p><input class="inputForm" type="text" name="identifiant" placeholder="Identifiant"> </p>
        <p><input class="inputForm" type="password" name="mdp" placeholder="Mot de passe"></p>
        <div class="contentForm">
            <button type="submit" class="authentificationButton" name="envoi" value="Connexion">Connexion</button>
            <p class="mdp" name="oublie">Oublié <a href="index.php?requete=reinitialiserMdp">votre mot de passe?</a></p>
            <p class="mdp" name="nutilisateur">Vous n'avez pas de compte? <a href="index.php?requete=nouveauUtilisateur">Créer un compte</a></p>

        </div>
    </form>
</div>





        