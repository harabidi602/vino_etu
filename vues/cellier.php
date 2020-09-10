<div class="cellier">
<?php
foreach ($data as $cle => $bouteille) {
 
    ?>
    <div class="bouteille" data-quantite="">
        <table class="description">
            <tr><th>img</th><th>Nom</th><th>qte</th><th>pays</th><th>type</th><th>millesime</th><th>Voir SAQ</th></tr>
            <tr>
                <td><img src="https:<?php echo $bouteille['image'] ?>"></td>
                <td><?php echo $bouteille['nom'] ?></td>
                <td id='quantite'><?php echo $bouteille['quantite'] ?></td>
                <td><?php echo $bouteille['pays'] ?></td>
                <td><?php echo $bouteille['type'] ?></td>
                <td><?php echo $bouteille['millesime'] ?></td>
                <td> <?php echo $bouteille['url_saq'] ?></td>
            </tr>
        </table>
      <!--  <div class="description">
            <p class="nom">Nom : <?php //echo $bouteille['nom'] ?></p>
            <p class="quantite">Quantité : <?php //echo $bouteille['quantite'] ?></p>
            <p class="pays">Pays : <?php //echo $bouteille['pays'] ?></p>
            <p class="type">Type : <?php //echo $bouteille['type'] ?></p>
            <p class="millesime">Millesime : <?php //echo $bouteille['millesime'] ?></p>
            <p><a href="<?php //echo $bouteille['url_saq'] ?>">Voir SAQ</a></p>
        </div> -->
        <div class="options" data-id="<?php echo $bouteille['id'] ?>">
            <button>Modifier</button>
            <button class='btnAjouter'>Ajouter</button>
            <button class='btnBoire'>Boire</button>
            
        </div>
    </div>
<?php


}

?>	
</div>


