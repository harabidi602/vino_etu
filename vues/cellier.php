<section class="cellier">
    <nav>
        <ul>		
            <li><a href="?requete=ajouterNouvelleBouteilleCellier">Ajouter une bouteille au cellier</a></li>
            <li><a href="?requete=ajouterNouveauCellier">Ajouter un nouveau cellier</a></li>
		</ul>
    </nav>
    <?php

    foreach ($data as $cle => $bouteille) {
        
    ?>
        <article class="bouteille" data-quantite="">
            <div class="img">
                <img src="https:<?php echo $bouteille['image'] ?>">
            </div>
            <ul class="infoBouteille">
                <li><?php echo $bouteille['id_bouteille'] ?></li>
                <li class="nom">Numéro du cellier : <?php echo $bouteille['id_cellier'] ?></li>
                <li class="nom">Nom : <?php echo $bouteille['nom'] ?></li>
                <li class="quantite">Quantité : <?php echo $bouteille['quantite'] ?></li>
                <li class="pays">Pays : <?php echo $bouteille['pays'] ?></li>
                <li class="type">Type : <?php echo $bouteille['type'] ?></li>
                <li class="millesime">Millesime : <?php echo $bouteille['millesime'] ?></li>
                <li><a href="<?php echo $bouteille['url_saq'] ?>">Voir SAQ</a></li>
            </ul>
            <div class="options" data-id_bouteille="<?php echo $bouteille['id_bouteille'] ?>" data-id_cellier="<?php echo $bouteille['id_cellier'] ?>">
                <button>Modifier</button>
                <button class='btnAjouter'>Ajouter</button>
                <button class='btnBoire'>Boire</button>

            </div>
        </article>
    <?php


    }

    ?>
</section>
</div>