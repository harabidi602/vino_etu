<div class="authentification">
    <div class="formA">
            <div class="formAuthentification" >
                <!-- <h1><img src="img/authen.png" alt="logo"/>AUTHENTIFICATION</h1> -->
                <div class="titre">
                    <img src="img/authen.png" alt="Image Authentification">
                    <h1>AUTHENTIFICATION</h1>
                </div>
                <form id="authentification" action="" method="post">
                <?php if(!empty($erreur)):?>
                <p><?php echo $erreur; ?></p>
                <?php endif; ?>
                <p><input type="text" name="identifiant" placeholder="Identifiant"> </p>
                <p><input type="password" name="mdp" placeholder="Mot de passe"></p>
    <div class="contentForm">
        <button type="submit" class="authentificationButton" name="envoi" value="Connexion">Connexion</button>
        <p class="mdp" name="oublie">Oublié <a href="index.php?requete=reinitialiserMdp">votre mot de passe?</a></p>
        <p class="mdp" name="nutilisateur">Vous n'avez pas de compte? <a href="index.php?requete=nouveauUtilisateur">Créer un compte</a></p>

    </div>
    </form>
    </div>
</div>




        