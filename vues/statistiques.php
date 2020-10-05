   <div class="nouveauUtil" vertical layout>
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



