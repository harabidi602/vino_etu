<div class="authentification">
    <div class="formA">
            <div class="formAuthentification" >
                <div class="titre">
                    <h1>Réinitialisez le mot de passe</h1>
                </div>
                <form id="nutilisateur" action="" method="post">
                <?php if(!empty($message)):?>
                <p><?php echo $message;?></p>
                <?php endif; ?>
                <p><input name="identifiant" placeholder="Identifiant" required></p>
                <p><input name="courriel" placeholder="courriel" required></p>
    <div class="contentForm">
        <button type="submit" class="creationButton" name="reinitialise">Réinitialisez</button>
        <p class="mdp"><a href="index.php"> Identifiez-vous </a></p>
    </div>
    </form>       
    </div>
    </div>
</div>