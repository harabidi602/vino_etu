   <div class="nouveauUtil" vertical layout>
    <h4>Statistiques </h4> 
    <table align="center">
       <caption>Les nombres d'usager et de cellier</caption>
        <thead>
            <tr>
                <th>Nombre d'usager</th>
                <th>Nombre de cellier</th>
            </tr>
        </thead>
        <tbody>
           <?php foreach ($nbUsager as $nb): ?>
             <td data-column="nusager"><?php echo $nb;?></td>
            <?php endforeach; ?>
             <?php foreach ($nbCellier as $nb): ?>
             <td data-column="nusager"><?php echo $nb;?></td>
            <?php endforeach; ?>      
        </tbody>
    </table>    

    <table align="center">
       <caption>Le nombre de cellier par usager</caption>
        <thead>
            <tr>
                <th>Usager</th>
                <th>Nombre de cellier</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($celUsager as $cU) : ?>
                <tr>
                    <td data-column="usager"><span><?php echo $cU['usager']; ?></span></td>
                    <td data-column="cellnombre"><span><?php echo $cU['nombre']; ?></span></td>   
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <table align="center">
       <caption>Le nombre de bouteille par cellier</caption>
        <thead>
            <tr>
                <th>Nom cellier</th>
                <th>Nombre de bouteille</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($btlCellier as $btlCel) : ?>
                <tr>
                    <td data-column="btlnom"><span><?php echo $btlCel['nom']; ?></span></td>
                    <td data-column="btlnombre"><span><?php echo $btlCel['nombre']; ?></span></td>   
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
     
    <table align="center">
       <caption>Le nombre de bouteille par usager</caption>
        <thead>
            <tr>
                <th>Usager</th>
                <th>Nombre de bouteille</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($btlUsager as $btlUs) : ?>
                <tr>
                    <td data-column="btlnom"><span><?php echo $btlUs['usager']; ?></span></td>
                    <td data-column="btlnombre"><span><?php echo $btlUs['nombre']; ?></span></td>   
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>



